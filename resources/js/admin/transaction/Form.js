import AppForm from '../app-components/Form/AppForm';

Vue.component('transaction-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                book_id:  '' ,
                member_id:  '' ,
                admin_user_id:  '' ,
                expiry:  '' ,
                
            }
        }
    }

});