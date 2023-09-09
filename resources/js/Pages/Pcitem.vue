<script setup>
import Layout1 from "@/Layouts/Layout1.vue";
defineProps({
    pc_items: Array,
});
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <Layout1>
        <div class="p-8">
            <h1 class="text-4xl mb-2 text-pink-800">
                Personal Collection Items
            </h1>
            <hr />
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Brand Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody class="text-pink-900">
                    <tr v-for="pc in pc_items.data" :key="pc.id">
                        <td>{{ pc.id }}</td>
                        <td>{{ pc.product_name }}</td>
                        <td>{{ pc.brand_name }}</td>
                        <td>{{ pc.price }}</td>
                        <td>{{ pc.quantity }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-5 flex items-center justify-center text-pink-800">
                Showing
                <strong class="relative border-4 px-2 rounded-full items-center bg-pink-600 text-pink-200 ring-1 ring-inset ring-pink-300">{{ pc_items.data.length }}</strong> entries.
            </div>
            <div class="mt-5 flex items-center justify-center">
                <nav
                    class="isolate inline-flex -space-x-px rounded-md shadow-sm"
                    aria-label="Pagination"
                >
                    <ul class="pagination">
                        <li
                            v-for="page in pc_items.links"
                            :key="page.url"
                            :class="{
                                ' relative border-4 rounded-full z-10 inline-flex items-center bg-pink-100 text-pink-900 ring-1 ring-inset ring-pink-300 hover:bg-pink-50 focus:outline-offset-0':
                                    !page.active && page.label !== 'Previous',
                                ' relative border-4 z-10 rounded-full inline-flex items-center text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600':
                                    page.active,
                                'opacity-50 border-4 rounded-full cursor-not-allowed relative z-10 inline-flex items-center px-4 py-2 text-sm font-semibold text-pink-300 ring-1 ring-inset ring-pink-300':
                                    !page.url && page.label === 'Previous',
                            }"
                        >
                            <Link
                                v-if="page.url"
                                :href="page.url"
                                :class="{
                                    'cursor-pointer border-4 rounded-full relative z-10 inline-flex items-center px-4 py-2 text-sm font-semibold text-pink-900 ring-1 ring-inset ring-pink-300 hover:bg-pink-200 focus:outline-offset-0':
                                        !page.active &&
                                        page.label !== 'Previous',
                                    'cursor-pointer border-4 rounded-full relative z-10 inline-flex items-center bg-pink-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600':
                                        page.active,
                                    'opacity-50 cursor-not-allowed border-4 rounded-full relative z-10 inline-flex items-center px-4 py-2 text-sm font-semibold text-pink-300 ring-1 ring-inset ring-pink-300':
                                        !page.url && page.label === 'Previous',
                                }"
                            >
                                <span v-if="page.label.includes('Next')"
                                    >Next <i class="fas fa-chevron-right"></i
                                ></span>

                                <span
                                    v-else-if="page.label.includes('Previous')"
                                >
                                    <i class="fas fa-chevron-left"></i> Previous
                                </span>
                                <span v-else class="page-link">{{
                                    page.label
                                }}</span>
                            </Link>
                            <span
                                v-else-if="page.label.includes('Previous')"
                                class="cursor-not-allowed px-4 py-2"
                                ><i class="fas fa-chevron-left"></i>
                                Previous</span
                            >
                            <span v-else class="cursor-not-allowed px-4 py-2"
                                >Next <i class="fas fa-chevron-right"></i
                            ></span>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </Layout1>
</template>
