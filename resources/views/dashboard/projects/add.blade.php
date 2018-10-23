@extends('dashboard.layout')
@section('content')

    <div class="panel_s" id="invoice_top_info">
        <div class="panel-body">
            <div class="row">
                <div id="merge" class="col-md-6">
                </div>
                <!--  When invoicing from project area the expenses are not visible here because you can select to bill expenses while trying to invoice project -->
                <div id="expenses_to_bill" class="col-md-6">
                </div>
            </div>
        </div>
    </div>
    <div class="panel_s invoice accounting-template">
        <div class="additional"></div>
        <div class="panel-body">
            <hr class="hr-panel-heading" />
            <div class="row">
                <div class="col-md-6">
                    <div class="f_client_id">
                        <div class="form-group select-placeholder">
                            <label for="clientid" class="control-label"></label>
                            <select id="clientid" name="clientid" data-live-search="true" data-width="100%" class="ajax-search" data-none-selected-text="">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group select-placeholder projects-wrapper">
                        <label for="project_id"></label>
                        <div id="project_ajax_search_wrapper">
                            <select name="project_id" id="project_id" class="projects ajax-search" data-live-search="true" data-width="100%" data-none-selected-text="">
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="hr-10" />
                            <a href="#" class="edit_shipping_billing_info" data-toggle="modal" data-target="#billing_and_shipping_details"><i class="fa fa-pencil-square-o"></i></a>
                        </div>
                        <div class="col-md-6">
                            <p class="bold"></p>
                            <address>
                     <span class="billing_street">
                    </span><br>
                                <span class="billing_city">
                     </span>
                                <span class="billing_state">
                     </span>
                                <br/>
                                <span class="billing_country">
                     </span>
                                <span class="billing_zip">
                     </span>
                            </address>
                        </div>
                        <div class="col-md-6">
                            <p class="bold"></p>
                            <address>
                     <span class="shipping_street">
                     </span><br>
                                <span class="shipping_city">
                     </span>
                                <span class="shipping_state">
                     </span>
                                <br/>
                                <span class="shipping_country">
                     </span>
                                <span class="shipping_zip">
                     </span>
                            </address>
                        </div>
                    </div>
                    <span id="prefix"></span>
                    <span id="prefix"></span><span id="prefix_year"></span>
                    <span id="prefix_year"></span>
                    <span id="prefix"></span>
                    <span id="prefix"></span>
                    <div class="form-group">
                        <label for="number"></label>
                        <div class="input-group">
                  <span class="input-group-addon">
                    <a href="#" onclick="" data-toggle="popover" data-container="" data-html="true" data-content=""><label class="control-label"></label><div class="input-group"><input name="s_prefix" type="text" class="form-control" value=""></div><button type="button" onclick="save_sales_number_settings" data-url="" class="btn btn-info btn-block mtop15"></button>">
                    <i class="fa fa-cog"></i>
                      </a>
                  </span>
                            <input type="text" name="number" class="form-control" value="" data-isedit="" data-original-number="">
                            <span class="input-group-addon">
                     <span id="prefix_year" class="format-n-yy"></span>
                  </span>
                            <span class="input-group-addon">
                     <span id="prefix_month" class="format-mm-yyyy"></span>
                     /
                     <span id="prefix_year" class="format-mm-yyyy"></span>
                  </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox checkbox-danger">
                            <input type="checkbox" id="cancel_overdue_reminders" name="cancel_overdue_reminders">
                            <label for="cancel_overdue_reminders"></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel_s no-shadow">

                        <div class="form-group">
                            <label for="tags" class="control-label"><i class="fa fa-tag" aria-hidden="true"></i> </label>
                            <input type="text" class="tagsinput" id="tags" name="tags" value="" data-role="tagsinput">
                        </div>
                        <div class="form-group mbot15 select-placeholder">
                            <label for="allowed_payment_modes" class="control-label"></label>
                            <br />
                            <select class="selectpicker" name="allowed_payment_modes[]" data-actions-box="true" multiple="true" data-width="100%" data-title="">
                                <option value=""></option>
                            </select>
                            <p></p>
                            <a class="btn btn-info" href="">
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group select-placeholder">
                                    <label for="recurring" class="control-label">
                                    </label>
                                    <select class="selectpicker" data-width="100%" name="recurring" data-none-selected-text="">

                                        <option value=""></option>
                                        <option value="custom" ></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group select-placeholder">
                                    <label for="discount_type" class="control-label"></label>
                                    <select name="discount_type" class="selectpicker" data-width="100%" data-none-selected-text="">
                                        <option value="" selected></option>
                                        <option value="before_tax"></option>
                                        <option value="after_tax"></option>
                                    </select>
                                </div>
                            </div>
                            <div class="recurring_custom ">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                    <select name="repeat_type_custom" id="repeat_type_custom" class="selectpicker" data-width="100%" data-none-selected-text="">
                                        <option value="day" ></option>
                                        <option value="week" ></option>
                                        <option value="month" ></option>
                                        <option value="year" ></option>
                                    </select>
                                </div>
                            </div>
                            <div id="cycles_wrapper" class="">
                                <div class="col-md-12">
                                    <div class="form-group recurring-cycles">
                                        <label for="cycles">
                                            <small></small>
                                        </label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="cycles" id="cycles" value="" >
                                            <div class="input-group-addon">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="unlimited_cycles">
                                                    <label for="unlimited_cycles"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body mtop10">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-3">
                    <div class="form-group select-placeholder input-group-select form-group-select-task_select popover-250">
                        <div class="input-group input-group-select">
                            <select name="task_select" data-live-search="true" id="task_select" class="selectpicker no-margin _select_input_group" data-width="100%" data-none-selected-text="">
                                <option value=""></option>
                                <option value="" class="text-danger important" data-subtext="" data-subtext="" ></option>
                            </select>
                            <div class="input-group-addon input-group-addon-bill-tasks-help">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 text-right show_quantity_as_wrapper">
                    <div class="mtop10">
                        <span></span>
                        <div class="radio radio-primary radio-inline">
                            <input type="radio" value="1" id="sq_1" name="show_quantity_as" data-text="invoice quealy check">
                            <label for="sq_1"></label>
                        </div>
                        <div class="radio radio-primary radio-inline">
                            <input type="radio" value="2" id="sq_2" name="show_quantity_as" data-text="invoice table hour invoice" >
                            <label for="sq_2"></label>
                        </div>
                        <div class="radio radio-primary radio-inline">
                            <input type="radio" value="3" id="sq_3" name="show_quantity_as" data-text="">
                            <label for="sq_3">/</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive s_table">
                <table class="table invoice-items-table items table-main-invoice-edit no-mtop">
                    <thead>
                    <tr>
                        <th></th>
                        <th width="20%" align="left"><i class="fa fa-exclamation-circle" aria-hidden="true" data-toggle="tooltip" data-title=""></i></th>
                        <th width="25%" align="left"></th>
                        <th width="10%" align="right" class="qty"></th>
                        <th width="15%" align="right"></th>
                        <th width="20%" align="right"></th>
                        <th width="10%" align="right"></th>
                        <th align="center"><i class="fa fa-cog"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="main">
                        <td></td>
                        <td>
                            <textarea name="description" class="form-control" rows="4" placeholder=""></textarea>
                        </td>
                        <td>
                            <textarea name="long_description" rows="4" class="form-control" placeholder=""></textarea>
                        </td>
                        <td>
                            <input type="number" name="quantity" min="0" value="1" class="form-control" placeholder="">
                            <input type="text" placeholder="" name="unit" class="form-control input-transparent text-right">
                        </td>
                        <td>
                            <input type="number" name="rate" class="form-control" placeholder="">
                        </td>
                        <td>
                            <option value=""></option>
                            <select>  </select>
                        </td>
                        <td></td>
                        <td>

                            <button type="button" onclick="add_item_to_table" class="btn pull-right btn-info"><i class="fa fa-check"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-8 col-md-offset-4">
                <table class="table text-right">
                    <tbody>
                    <tr id="subtotal">
                        <td><span class="bold"> :</span>
                        </td>
                        <td class="subtotal">
                        </td>
                    </tr>
                    <tr id="discount_area">
                        <td>
                            <div class="row">
                                <div class="col-md-7">
                           <span class="bold">
                         </span>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group" id="discount-total">

                                        <input type="number" value="" class="form-control pull-left input-discount-percent" min="0" max="100" name="discount_percent">

                                        <input type="number" data-toggle="tooltip" data-title="" value="" class="form-control pull-left input-discount-fixed" min="0" name="discount_total">

                                        <div class="input-group-addon">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" id="dropdown_menu_tax_total_type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                      <span class="discount-total-type-selected">
                                      </span>
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" id="discount-total-type-dropdown" aria-labelledby="dropdown_menu_tax_total_type">
                                                    <li>
                                                        <a href="#" class="discount-total-type discount-type-percent">%</a>
                                                    </li>
                                                    <li><a href="#" class="discount-total-type discount-type-fixed">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="discount-total"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-md-7">
                                    <span class="bold"></span>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" data-toggle="tooltip" data-title="" value="" class="form-control pull-left" name="adjustment">
                                </div>
                            </div>
                        </td>
                        <td class="adjustment"></td>
                    </tr>
                    <tr>
                        <td><span class="bold">algo:</span>
                        </td>
                        <td class="total">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="removed-items"></div>
            <div id="billed-tasks"></div>
            <div id="billed-expenses"></div>

        </div>
        <div class="row">
            <div class="col-md-12 mtop15">
                <div class="panel-body bottom-transaction">
                    <div class="btn-bottom-toolbar text-right">
                        <button class="btn-tr btn btn-default mleft10 text-right invoice-form-submit save-as-draft transaction-submit">
                        </button>
                        <button class="btn-tr btn btn-info mleft10 text-right invoice-form-submit save-and-send transaction-submit">
                        </button>
                        <button class="btn-tr btn btn-info mleft10 text-right invoice-form-submit transaction-submit">
                        </button>
                    </div>
                </div>
                <div class="btn-bottom-pusher"></div>
            </div>
        </div>
    </div>


@endsection