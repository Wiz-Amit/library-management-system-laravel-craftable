import AppForm from '../app-components/Form/AppForm';

Vue.component('book-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                author:  '' ,
                price:  '' ,
                rack_no:  '' ,
                edition:  '' ,
                count:  '' ,
                
            }
        }
    }

});