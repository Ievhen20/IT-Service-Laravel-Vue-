<script setup>
import { ref } from 'vue';
import { useForm, usePage } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import DangerButton from '@/Components/DangerButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import NumbericInput from '@/Components/NumbericInput.vue';

const { props } = usePage();
let products = ref(props.products.data || []); // Ensure default as empty array
let pagination = ref(props.products); // Assuming pagination object is passed correctly
const perPageOptions = [5, 10, 20];

const form = useForm({
  productName: '',
  description: '',
  price: '',
  amount: '',
  id: null,
});

// Fetch products with pagination
const fetchProducts = async (page = 1, perPage = 10) => {
  try {
    const response = await axios.get(route('products.show'), { params: { page, per_page: perPage } });

    // Ensure the response structure is correct and handle any undefined data
    const productsData = response.data.products;

    if (productsData && productsData.data) {
      products.value = productsData.data;  // Set products
      pagination.value = productsData;     // Set pagination data
    } else {
      console.error('Products data is missing or malformed:', response.data);
    }
  } catch (error) {
    console.error('Error fetching products:', error);
  }
};

// Add or update product
const onSubmit = async () => {
  try {
    if (form.id) {
      await form.post(route('product.update', form.id), {
        onSuccess: () => {
          resetForm();
          fetchProducts(pagination.value.current_page, pagination.value.per_page);
        },
      });
    } else {
      await form.post(route('product.create'), {
        onSuccess: () => {
          fetchProducts(1, pagination.value.per_page);
          resetForm();
        },
      });
    }
  } catch (error) {
    console.error('Error saving product:', error);
  }
};

// Populate form for editing
const editProduct = (id) => {
  const product = products.value.find((p) => p.id === id);
  if (product) {
    Object.assign(form, { ...product, id });
  }
};

// Remove product
const removeProduct = async (id) => {
  if (confirm('Are you sure you want to delete this product?')) {
    try {
      await axios.delete(route('product.destroy', id));
      fetchProducts(pagination.value.current_page, pagination.value.per_page);
    } catch (error) {
      console.error('Error deleting product:', error);
    }
  }
};

// Reset form
const resetForm = () => {
  form.reset();
};
</script>

<template>

  <Head title="Products" />
  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">Product Management</h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto space-y-6 sm:px-6 lg:px-8">
        <!-- Form for Adding/Editing Products -->
        <div v-if="$page.props.auth.user.is_admin" class="bg-white p-6 shadow rounded-lg">
          <form @submit.prevent="onSubmit">
            <div>
              <InputLabel for="productName" value="Product Name" />
              <TextInput id="productName" type="text" class="mt-1 block w-full" v-model="form.productName" required />
              <InputError :message="form.errors.productName" class="mt-2" />
            </div>
            <div class="mt-4">
              <InputLabel for="description" value="Description" />
              <TextInput id="description" type="text" class="mt-1 block w-full" v-model="form.description" required />
              <InputError :message="form.errors.description" class="mt-2" />
            </div>
            <div class="mt-4">
              <InputLabel for="price" value="Price" />
              <NumbericInput id="price" class="mt-1 block w-full" v-model="form.price" required />
              <InputError :message="form.errors.price" class="mt-2" />
            </div>
            <div class="mt-4">
              <InputLabel for="amount" value="Amount" />
              <NumbericInput id="amount" class="mt-1 block w-full" v-model="form.amount" required />
              <InputError :message="form.errors.amount" class="mt-2" />
            </div>
            <div class="mt-4 flex justify-end">
              <PrimaryButton :disabled="form.processing">
                {{ form.id ? 'Update' : 'Create' }}
              </PrimaryButton>
            </div>
          </form>
        </div>

        <!-- Product List with Pagination -->
        <div class="bg-white p-6 shadow rounded-lg">
          <table class="w-full mt-4 border border-gray-200">
            <thead>
              <tr class="bg-gray-100">
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Amount</th>
                <th class="px-4 py-2">Action</th>
              </tr>
            </thead>
            <tbody>
              <template v-if="products.length > 0">
                <tr v-for="(product, index) in products" :key="product.id">
                  <td class="border px-4 py-2">{{ (pagination.current_page - 1) * pagination.per_page + index + 1 }}
                  </td>
                  <td class="border px-4 py-2">{{ product.productName }}</td>
                  <td class="border px-4 py-2">{{ product.description }}</td>
                  <td class="border px-4 py-2">${{ product.price }}</td>
                  <td class="border px-4 py-2">{{ product.amount }}</td>
                  <td v-if="$page.props.auth.user.is_admin"
                    class="border px-4 py-2 flex items-center justify-center space-x-2">
                    <PrimaryButton @click="editProduct(product.id)" class="py-1 mx-1 bg-green-500">Edit</PrimaryButton>
                    <DangerButton @click="removeProduct(product.id)">Remove</DangerButton>
                  </td>
                  <td v-else class="border px-4 py-2">
                    <PrimaryButton class="bg-lightSeaGreen-100 border-gray-500 text-black-500">View</PrimaryButton>
                  </td>
                </tr>
              </template>
              <tr v-else>
                <td class="border px-4 py-2 text-center" :colspan="($page.props.auth.user.is_admin ? 6 : 5)">No Products
                </td>
              </tr>
            </tbody>
          </table>

          <!-- Pagination Controls -->
          <div v-if="pagination && pagination.current_page" class="mt-4 flex justify-between items-center">
            <div>
              <span>Show</span>
              <select v-model="pagination.per_page" @change="fetchProducts(1, pagination.per_page)" class="ml-2">
                <option v-for="option in perPageOptions" :key="option" :value="option">{{ option }}</option>
              </select>
              <span class="ml-2">per page</span>
            </div>
            <div>
              <button :disabled="pagination.current_page === 1" @click="fetchProducts(pagination.current_page - 1)"
                class="px-4 py-2 bg-blue-500 text-white rounded">Previous</button>
              <span class="mx-4">Page {{ pagination.current_page }} of {{ pagination.last_page }}</span>
              <button :disabled="pagination.current_page === pagination.last_page"
                @click="fetchProducts(pagination.current_page + 1)"
                class="px-4 py-2 bg-blue-500 text-white rounded">Next</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>