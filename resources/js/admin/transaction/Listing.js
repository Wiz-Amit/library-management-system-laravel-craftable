import AppListing from "../app-components/Listing/AppListing";

Vue.component("transaction-listing", {
    mixins: [AppListing],

    data() {
        return {
            showBooksFilter: false,
            showMembersFilter: false,

            filters: {
                books: [],
                members: []
            }
        };
    },

    watch: {
        showBooksFilter: function(newVal, oldVal) {
            this.booksMultiselect = [];
        },
        booksMultiselect: function(newVal, oldVal) {
            this.filters.books = newVal.map(function(object) {
                return object["key"];
            });
            this.filter("books", this.filters.books);
        },
        showMembersFilter: function(newVal, oldVal) {
            this.membersMultiselect = [];
        },
        membersMultiselect: function(newVal, oldVal) {
            this.filters.members = newVal.map(function(object) {
                return object["key"];
            });
            this.filter("members", this.filters.members);
        }
    }
});
