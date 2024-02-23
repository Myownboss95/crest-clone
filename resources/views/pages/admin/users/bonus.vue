<template>
  <Head title="Bonus" />
  <breadcrumb title="Add Bonus" :crumbs="['Dashboard', 'Users']" />

  <div class="col-lg-11 mx-auto">
    <div class="w-100 mb-3 d-flex justify-content-between">
      <div class="col-sm-6 col-md-3">
        <FormInput placeholder="Search..." v-model.lazy="form.search" />
      </div>

      <div class="col-sm-6 col-md-2">
        <FormSelect
          name="search"
          v-model="form.status"
          :options="{
            all: 'All',
            active: 'Active',
            pending: 'Pending',
            suspended: 'Suspended',
          }"
        />
      </div>
    </div>
    <div v-if="users.length">
        <div
          class="card shadow rounded-lg"
          v-for="(user, key) in users"
          :key="key"
        >
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-xl-3 col-lg-6 col-sm-12 d-flex mb-sm-2">
                <span class="user-img-wrapper me-sm-4 me-3">
                  <img
                    class="h-100 w-100"
                    :src="profile_picture(user.image)"
                    width="95"
                  />
                </span>
                <div class="media-body">
                  <h6>{{ `${user.first_name} ${user.last_name}` }}</h6>
                  <span class="d-blockn font-size-12">{{
                    new Date(user.created_at).toDateString()
                  }}</span>
                </div>
              </div>
              <div class="col-xl-2 col-lg-6 col-sm-4 mb-sm-3 mb-3">
                <small class="mb-2 d-block font-size-12 fw-bold"
                  >Email Address</small
                >
                <span class="font-size-12">{{ user.email }}</span>
              </div>
              <div class="col-xl-2 col-md-12 col-lg-6 col-sm-12 mb-sm-4 mb-0">
                <hr class="d-md-none mt-0" />
                <div class="d-flex justify-content-between items-center my-auto">
                  
                  <div class="dropdown ms-4">
                    <InertiaLink :href="route('admin.users.add-or-remove-funds', user.id)" class="btn btn-outline-primary">
                        <i class="fa fa-plus"></i>
                        Add/Deduct Bonus
                    </InertiaLink>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="w-100 pb-3 d-flex justify-content-center">
            <Paginator :links="links" />
        </div>
    </div>
    <div class="text-center pt-5 pb-5 border rounded text-muted" v-else>
        No users found
    </div>

  </div>
</template>

<script setup>
  import breadcrumb from '@/views/components/layout/breadcrumb.vue';
  import { computed } from '@vue/runtime-core';
  import FormInput from '../../../components/form/FormInput.vue';
  import FormSelect from '@/views/components/form/FormSelect.vue';
  import { useForm } from '@inertiajs/inertia-vue3';
  import { watch } from 'vue';
  import route from 'ziggy-js';
    import Paginator from '@/views/components/paginator.vue';
  import { profile_picture } from '@/js/functions';
import { Inertia } from '@inertiajs/inertia';

  const props = defineProps(['users']);
  const form = useForm({
    status: route().params.status || 'all',
    search: route().params.search || '',
  });

  const users = computed(() => props.users.data);

const links = computed(() => props.users.links);

const deleteUser = id => {
    if (confirm('Are you sure you want to delete this user?')) {
        Inertia.delete(route('admin.users.destroy',id));
    }
}

  watch(
    () => form.data(),
    () => {
      form
        .transform((data) => {
          if (data.search == '') {
            delete data.search;
          }
          return data;
        })
        .get(route('admin.users.index'), {
          preserveState: true,
        });
    }
  );
</script>


<style scoped>
  .card .user-img-wrapper {
    height: 3rem;
    width: 3rem;
    border-radius: 50%;
    overflow: hidden;
  }

  .user-img-wrapper img {
    object-fit: cover;
  }

  .card {
    border-radius: 25px;
  }
</style>
