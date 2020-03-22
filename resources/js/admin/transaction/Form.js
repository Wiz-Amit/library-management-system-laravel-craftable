import AppForm from '../app-components/Form/AppForm';

Vue.component('transaction-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                book:  '' ,
                member:  '' ,
                admin_user_id:  '' ,
                expiry:  '' ,

            }
        }
    }

});
