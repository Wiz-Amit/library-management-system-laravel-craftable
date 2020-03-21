import AppForm from '../app-components/Form/AppForm';

Vue.component('member-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                type:  '' ,
                name:  '' ,
                phone:  '' ,
                email:  '' ,
                address_l1:  '' ,
                address_l2:  '' ,
                expiry:  '' ,
                
            }
        }
    }

});