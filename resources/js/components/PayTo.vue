<template>
    <div>

        <div class="form-group">
                                        <label for="userselect">User</label>
        <v-select label="name" :filterable="false" :options="options" @search="onSearch" v-model="user" id="userselect" placeholder="Select user">

    <template slot="no-options">
      type to search users...
    </template>
    <template slot="option" slot-scope="option">
      <div class="d-center">
        {{ option.name }} {{option.email}}
        </div>
    </template>
    <template slot="selected-option" slot-scope="option">
      <div class="selected d-center">
        {{ option.name }} {{option.email}}
      </div>
    </template>

        </v-select>
        </div>
        <div class="form-group">
                                        <label for="userselect">Money</label>
        <input type="number" min="1" v-model="money" class="form-control" name="money" id="money" placeholder="How much?">
        </div>
        <button type="submit" class="btn btn-sm btn-primary m-r-5" @click="sendMoney">Send</button>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
         data () {
            return {
               // csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                user: '',
                money: '',
                options: [],
            }
        },
         methods: {
           sendMoney(){
            axios.post('/sendmoney', {
                    user: this.user.id,
                    money: this.money
                })
                    .then(function (response) {
                    console.log(response);
                       if(response.data.status == 'ok'){
                       console.log(response);
                           window.location.href = '/wallet';
                       }
                    })
                    .catch(function (error) {
                        console.log(error);
                    });

           },
           onSearch: function onSearch(search, loading) {
      loading(true);
      this.search(loading, search, this);
    },

    search: _.debounce(function (loading, search, vm) {
      fetch("/getuser?q=" +
      escape(search)).
      then(function (res) {
        res.json().then(function (json) {return vm.options = json;});
        loading(false);
      });
    }, 350)
        }
    }
</script>
