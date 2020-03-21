<div class="form-group row align-items-center" :class="{'has-danger': errors.has('book_id'), 'has-success': fields.book_id && fields.book_id.valid }">
    <label for="book_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.transaction.columns.book_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.book_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('book_id'), 'form-control-success': fields.book_id && fields.book_id.valid}" id="book_id" name="book_id" placeholder="{{ trans('admin.transaction.columns.book_id') }}">
        <div v-if="errors.has('book_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('book_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('member_id'), 'has-success': fields.member_id && fields.member_id.valid }">
    <label for="member_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.transaction.columns.member_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.member_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('member_id'), 'form-control-success': fields.member_id && fields.member_id.valid}" id="member_id" name="member_id" placeholder="{{ trans('admin.transaction.columns.member_id') }}">
        <div v-if="errors.has('member_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('member_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('admin_user_id'), 'has-success': fields.admin_user_id && fields.admin_user_id.valid }">
    <label for="admin_user_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.transaction.columns.admin_user_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.admin_user_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('admin_user_id'), 'form-control-success': fields.admin_user_id && fields.admin_user_id.valid}" id="admin_user_id" name="admin_user_id" placeholder="{{ trans('admin.transaction.columns.admin_user_id') }}">
        <div v-if="errors.has('admin_user_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('admin_user_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('expiry'), 'has-success': fields.expiry && fields.expiry.valid }">
    <label for="expiry" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.transaction.columns.expiry') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.expiry" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('expiry'), 'form-control-success': fields.expiry && fields.expiry.valid}" id="expiry" name="expiry" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('expiry')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('expiry') }}</div>
    </div>
</div>


