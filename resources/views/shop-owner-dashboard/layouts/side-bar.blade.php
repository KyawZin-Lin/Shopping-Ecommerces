<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="" class="b-brand text-primary">
                {{-- <img src="{{asset('shop-owner/assets/images/logo-white.svg')}}" class="img-fluid logo-lg" alt="logo"> --}}
                <p>SPACE FOR LOGO</p>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>

                <li class="pc-item">
                    <a href="{{ route('shop-owner.dashboard') }}" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="home"></i>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="grid"></i>
                        </span>
                        <span class="pc-mtext">Lists</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                        <span class="pc-badge">5</span>
                    </a>
                    <ul class="pc-submenu">
                        @can('category-list')
                            <li class="pc-item">
                                <a class="pc-link" href="{{route('shop-owner.categories.index')}}">Category</a>
                            </li>
                        @endcan
                        {{-- <li class="pc-item">
                            <a class="pc-link" href="../dashboard/ecommerce.html">Ecommerce</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../dashboard/crm.html">CRM</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../dashboard/analytics.html">Analytics</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../dashboard/crypto.html">Crypto</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../dashboard/finance.html">Finance</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../dashboard/project.html">Project</a>
                        </li> --}}
                    </ul>
                </li>
                {{-- <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="layout"></i>
                        </span>
                        <span class="pc-mtext">Layouts</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../demo/layout-vertical.html">Vertical</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../demo/layout-horizontal.html">Horizontal</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../demo/layout-compact.html">Compact</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../demo/layout-tab.html">Tab</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../demo/layout-2.html">Layouts 2</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../demo/layout-3.html">Layouts 3</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="layers"></i>
                        </span>
                        <span class="pc-mtext">Widget</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../widget/w_statistics.html">Statistic</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../widget/w_data.html">Data</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../widget/w_table.html">Table</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../widget/w_user.html">User</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../widget/w_chart.html">Chart</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-caption">
                    <label>Admin Panel</label>
                    <i class="ti ti-book"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-book"></i>
                        </span>
                        <span class="pc-mtext">Online Courses</span>
                        <span class="pc-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/course-dashboard.html">Dashboard</a>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a class="pc-link" href="#!">
                                Teacher
                                <span class="pc-arrow">
                                    <i data-feather="chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/course-teacher-list.html">List</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/course-teacher-apply.html">Apply</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/course-teacher-add.html">Add</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a class="pc-link" href="#!">
                                Student
                                <span class="pc-arrow">
                                    <i data-feather="chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/course-student-list.html">list</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/course-student-apply.html">Apply</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/course-student-add.html">Add</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a class="pc-link" href="#!">
                                Courses
                                <span class="pc-arrow">
                                    <i data-feather="chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/course-course-view.html">View</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/course-course-add.html">Add</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/course-pricing.html">Pricing</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/course-site.html">Site</a>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a class="pc-link" href="#!">
                                Setting
                                <span class="pc-arrow">
                                    <i data-feather="chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/course-setting-payment.html">Payment</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/course-setting-pricing.html">Pricing</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link"
                                        href="../admins/course-setting-notifications.html">Notifications</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="pc-mtext">Membership</span>
                        <span class="pc-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/membership-dashboard.html">Dashboard</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/membership-list.html">List</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/membership-pricing.html">Pricing</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/membership-setting.html">Setting</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-help"></i>
                        </span>
                        <span class="pc-mtext">Helpdesk</span>
                        <span class="pc-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/helpdesk-dashboard.html">Dashboard</a>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a class="pc-link" href="#!">
                                Ticket
                                <span class="pc-arrow">
                                    <i data-feather="chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/helpdesk-create-ticket.html">Create</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/helpdesk-ticket.html">List</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../admins/helpdesk-ticket-details.html">Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/helpdesk-customer.html">Customer</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-file-invoice"></i>
                        </span>
                        <span class="pc-mtext">invoice</span>
                        <span class="pc-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/invoice-dashboard.html">Dashboard</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/invoice-create.html">Create</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/invoice-view.html">Details</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/invoice-list.html">List</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../admins/invoice-edit.html">Edit</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-caption">
                    <label>UI Components</label>
                    <i data-feather="feather"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="box"></i>
                        </span>
                        <span class="pc-mtext">Basic</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_alert.html">Alert</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_button.html">Button</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_badges.html">Badges</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_breadcrumb.html">Breadcrumb</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_card.html">Cards</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_color.html">Color</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_collapse.html">Collapse</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_carousel.html">Carousel</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_dropdowns.html">Dropdowns</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_offcanvas.html">Offcanvas</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_pagination.html">Pagination</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_progress.html">Progress</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_list-group.html">List group</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_modal.html">Modal</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_spinner.html">Spinner</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_tabs.html">Tabs & pills</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_typography.html">Typography</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_tooltip-popover.html">Tooltip</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_toasts.html">Toasts</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/bc_extra.html">Other</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="gitlab"></i>
                        </span>
                        <span class="pc-mtext">Advance</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/ac_alert.html">Sweet alert</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/ac_datepicker-component.html">Datepicker</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/ac_lightbox.html">Lightbox</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/ac_modal.html">Modal</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/ac_notification.html">Notification</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/ac_rangeslider.html">Range slider</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/ac_slider.html">Slider</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/ac_syntax_highlighter.html">Syntax
                                Highlighter</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/ac_tour.html">Tour</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/ac_treeview.html">Tree view</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item">
                    <a href="../elements/animation.html" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="command"></i>
                        </span>
                        <span class="pc-mtext">Animation</span>
                    </a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="feather"></i>
                        </span>
                        <span class="pc-mtext">Icons</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/icon-feather.html">Feather</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/icon-fontawesome.html">Font Awesome 5</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/icon-material.html">Material</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/icon-tabler.html">Tabler</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/icon-phosphor.html">Phosphor</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../elements/icon-custom.html">Custom</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-caption">
                    <label>Forms</label>
                    <i data-feather="file-text"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="file-text"></i>
                        </span>
                        <span class="pc-mtext">Forms Elements</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form_elements.html">Form Basic</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form_floating.html">Form Floating</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_basic.html">Form Options</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_input_group.html">Input Groups</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_checkbox.html">Checkbox</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_radio.html">Radio</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_switch.html">Switch</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_megaoption.html">Mega option</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="file-text"></i>
                        </span>
                        <span class="pc-mtext">Forms Plugins</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item pc-hasmenu">
                            <a class="pc-link" href="#">
                                Date
                                <span class="pc-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" href="../forms/form2_datepicker.html">Datepicker</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../forms/form2_daterangepicker.html">Date Range
                                        Picker</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../forms/form2_timepicker.html">Timepicker</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a class="pc-link" href="#">
                                Select
                                <span class="pc-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" href="../forms/form2_choices.html">Choices js</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_rating.html">Rating</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_recaptcha.html">Google reCaptcha</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_inputmask.html">Input Masks</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_clipboard.html">Clipboard</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_nouislider.html">Nouislider</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_switchjs.html">Bootstrap Switch</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_typeahead.html">Typeahead</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="file-text"></i>
                        </span>
                        <span class="pc-mtext">Text Editors</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_tinymce.html">Tinymce</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_quill.html">Quill</a>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a class="pc-link" href="#">
                                CK editor
                                <span class="pc-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" href="../forms/editor-classic.html">classic</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../forms/editor-document.html">Document</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../forms/editor-inline.html">Inline</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../forms/editor-balloon.html">Balloon</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_markdown.html">Markdown</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="file-text"></i>
                        </span>
                        <span class="pc-mtext">Form Layouts</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_lay-default.html">Layouts</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_lay-multicolumn.html">Multicolumn</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_lay-actionbars.html">Actionbars</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_lay-stickyactionbars.html">Sticky Action
                                bars</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="file-text"></i>
                        </span>
                        <span class="pc-mtext">File upload</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/file-upload.html">Dropzone</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../forms/form2_flu-uppy.html">Uppy</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item">
                    <a href="../forms/form2_wizard.html" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="copy"></i>
                        </span>
                        <span class="pc-mtext">wizard</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../forms/form-validation.html" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="grid"></i>
                        </span>
                        <span class="pc-mtext">Form Validation</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../forms/image_crop.html" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="scissors"></i>
                        </span>
                        <span class="pc-mtext">Image cropper</span>
                    </a>
                </li>
                <li class="pc-item pc-caption">
                    <label>table</label>
                    <i data-feather="server"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="server"></i>
                        </span>
                        <span class="pc-mtext">Bootstrap Table</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_bootstrap.html">Basic table</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_sizing.html">Sizing table</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_border.html">Border table</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_styling.html">Styling table</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="server"></i>
                        </span>
                        <span class="pc-mtext">Vanilla Table</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_dt-simple.html">Basic initialization</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_dt-dynamic-import.html">Dynamic Import</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_dt-render-column-cells.html">Render Column
                                Cells</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_dt-column-manipulation.html">Column
                                Manipulation</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_dt-datetime-sorting.html">Datetime Sorting</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_dt-methods.html">Methods</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_dt-add-rows.html">Add Rows</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_dt-fetch-api.html">Fetch API</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_dt-filters.html">Filters</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/tbl_dt-export.html">Export</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="server"></i>
                        </span>
                        <span class="pc-mtext">Data table</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_advance.html">Advance initialization</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_styling.html">Styling</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_api.html">API</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_plugin.html">Plug-in</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_sources.html">Data sources</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="server"></i>
                        </span>
                        <span class="pc-mtext">DT extensions</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_ext_autofill.html">Autofill</a>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                Button
                                <span class="pc-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" href="../table/dt_ext_basic_buttons.html">Basic button</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="../table/dt_ext_export_buttons.html">Data export</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_ext_col_reorder.html">Col reorder</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_ext_fixed_columns.html">Fixed columns</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_ext_fixed_header.html">Fixed header</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_ext_key_table.html">Key table</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_ext_responsive.html">Responsive</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_ext_row_reorder.html">Row reorder</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_ext_scroller.html">Scroller</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../table/dt_ext_select.html">Select table</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-caption">
                    <label>Charts &and;Maps</label>
                    <i data-feather="pie-chart"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="pie-chart"></i>
                        </span>
                        <span class="pc-mtext">Charts</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../chart/chart-apex.html">Apex Chart</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../chart/chart-peity.html">Peity Chart</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="map"></i>
                        </span>
                        <span class="pc-mtext">Maps</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../chart/map-vector.html">Vector Maps</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../chart/map-gmap.html">Gmaps</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-caption">
                    <label>Application</label>
                    <i data-feather="check-square"></i>
                </li>
                <li class="pc-item">
                    <a href="../application/calendar.html" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="calendar"></i>
                        </span>
                        <span class="pc-mtext">Calendar</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../application/chat.html" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="message-square"></i>
                        </span>
                        <span class="pc-mtext">Message</span>
                    </a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="clipboard"></i>
                        </span>
                        <span class="pc-mtext">Task</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../application/task-list.html">List</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../application/task-board.html">Board</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../application/task-detail.html">Detail</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item">
                    <a href="../application/todo.html" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="check-square"></i>
                        </span>
                        <span class="pc-mtext">To Do</span>
                    </a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="image"></i>
                        </span>
                        <span class="pc-mtext">Gallery</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../application/gallery-grid.html">Grid</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../application/gallery-masonry.html">Masonry</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../application/gallery-advance.html">Advance</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="file-minus"></i>
                        </span>
                        <span class="pc-mtext">Invoice</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../application/invoice.html">Invoice</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../application/invoice-summary.html">Invoice summary</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../application/invoice-list.html">Invoice list</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="users"></i>
                        </span>
                        <span class="pc-mtext">Users</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="../application/user-profile.html">Profile</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../application/user-profile-social.html">Social Profile</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../application/user-card.html">User Card</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="../application/user-list.html">User List</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-caption">
                    <label>Pages</label>
                    <i data-feather="monitor"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="lock"></i>
                        </span>
                        <span class="pc-mtext">Authentication</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                Login
                                <span class="pc-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank" href="../pages/login-v1.html">Login v1</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank" href="../pages/login-v2.html">Login v2</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank" href="../pages/login-v3.html">Login v3</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank" href="../pages/login-v4.html">Login v4</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank" href="../pages/login-v5.html">Login v5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                Register
                                <span class="pc-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank" href="../pages/register-v1.html">Register
                                        v1</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank" href="../pages/register-v2.html">Register
                                        v2</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank" href="../pages/register-v3.html">Register
                                        v3</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank" href="../pages/register-v4.html">Register
                                        v4</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank" href="../pages/register-v5.html">Register
                                        v5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                Reset password
                                <span class="pc-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank"
                                        href="../pages/reset-password-v1.html">Reset password v1</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank"
                                        href="../pages/reset-password-v2.html">Reset password v2</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank"
                                        href="../pages/reset-password-v3.html">Reset password v3</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank"
                                        href="../pages/reset-password-v4.html">Reset password v4</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank"
                                        href="../pages/reset-password-v5.html">Reset password v5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                Change password
                                <span class="pc-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank"
                                        href="../pages/change-password-v1.html">Change password v1</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank"
                                        href="../pages/change-password-v2.html">Change password v2</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank"
                                        href="../pages/change-password-v3.html">Change password v3</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank"
                                        href="../pages/change-password-v4.html">Change password v4</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" target="_blank"
                                        href="../pages/change-password-v5.html">Change password v5</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="sliders"></i>
                        </span>
                        <span class="pc-mtext">Maintenance</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" target="_blank" href="../pages/error.html">Error</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" target="_blank" href="../pages/coming-soon.html">Coming Soon</a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" target="_blank" href="../pages/offline-ui.html">Offline Ui</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item">
                    <a href="../pages/landing.html" class="pc-link" target="_blank">
                        <span class="pc-micon">
                            <i data-feather="navigation-2"></i>
                        </span>
                        <span class="pc-mtext">Landing</span>
                    </a>
                </li>
                <li class="pc-item pc-caption">
                    <label>Other</label>
                    <i data-feather="sidebar"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="align-right"></i>
                        </span>
                        <span class="pc-mtext">Menu levels</span>
                        <span class="pc-arrow">
                            <i class="ti ti-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="#!">Level 2.1</a>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                Level 2.2
                                <span class="pc-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" href="#!">Level 3.1</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="#!">Level 3.2</a>
                                </li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">
                                        Level 3.3
                                        <span class="pc-arrow">
                                            <i class="ti ti-chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item">
                                            <a class="pc-link" href="#!">Level 4.1</a>
                                        </li>
                                        <li class="pc-item">
                                            <a class="pc-link" href="#!">Level 4.2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                Level 2.3
                                <span class="pc-arrow">
                                    <i class="ti ti-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" href="#!">Level 3.1</a>
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="#!">Level 3.2</a>
                                </li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">
                                        Level 3.3
                                        <span class="pc-arrow">
                                            <i class="ti ti-chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item">
                                            <a class="pc-link" href="#!">Level 4.1</a>
                                        </li>
                                        <li class="pc-item">
                                            <a class="pc-link" href="#!">Level 4.2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="pc-item">
                    <a href="../other/sample-page.html" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="sidebar"></i>
                        </span>
                        <span class="pc-mtext">Sample page</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
