<!-- Sidebar (menu) -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Menu Principal</span>
                </li>
                <li class="submenu">
                    <a href="{{ route('admin.index') }}"><i class="feather-grid"></i> <span> Painel</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.index') }}">Painel Administrativo</a></li>
                        <li><a href="#">Painel do Professor</a></li>
                        <li><a href="#">Painel do Aluno</a></li>
                    </ul>
                </li>
                <li class="submenu active">
                    <a href="#"><i class="fas fa-solid fa-school "></i> <span> Escola</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.school.listar') }}" class="active">Listar Escola</a></li>
                        <!--<li><a href="student-details.html">Visualizar Escola</a></li>-->
                        <li><a href="#">Adicionar Escola</a></li>
                        <li><a href="#">Editar Escola</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span> Alunos</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="students.html">Listar Alunos</a></li>
                        <li><a href="student-details.html">Visualizar Aluno</a></li>
                        <li><a href="add-student.html">Adicionar Aluno</a></li>
                        <li><a href="edit-student.html">Editar Aluno</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Professores</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="teachers.html">Listar Professores</a></li>
                        <li><a href="teacher-details.html">Visualizar Professor</a></li>
                        <li><a href="add-teacher.html">Adicionar Professor</a></li>
                        <li><a href="edit-teacher.html">Editar Professor</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-building"></i> <span> Departamentos</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="departments.html">Listar Departamentos</a></li>
                        <li><a href="add-department.html">Adicionar Departamento</a></li>
                        <li><a href="edit-department.html">Editar Departamento</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Assuntos</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="subjects.html">Listar Assunto</a></li>
                        <li><a href="add-subject.html">Adicionar Assunto</a></li>
                        <li><a href="edit-subject.html">Editar Assunto</a></li>
                    </ul>
                </li>
                <!--<li class="submenu">
                    <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="invoices.html">Invoices List</a></li>
                        <li><a href="invoice-grid.html">Invoices Grid</a></li>
                        <li><a href="add-invoice.html">Add Invoices</a></li>
                        <li><a href="edit-invoice.html">Edit Invoices</a></li>
                        <li><a href="view-invoice.html">Invoices Details</a></li>
                        <li><a href="invoices-settings.html">Invoices Settings</a></li>
                    </ul>
                </li>-->
                <li class="menu-title">
                    <span>Gerencionamento</span>
                </li>
                <!--<li class="submenu">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="fees-collections.html">Fees Collection</a></li>
                        <li><a href="expenses.html">Expenses</a></li>
                        <li><a href="salary.html">Salary</a></li>
                        <li><a href="add-fees-collection.html">Add Fees</a></li>
                        <li><a href="add-expenses.html">Add Expenses</a></li>
                        <li><a href="add-salary.html">Add Salary</a></li>
                    </ul>
                    </li>-->
                <li>
                    <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Feriado</span></a>
                </li>
                <!--<li>
                    <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                </li>-->
                <li>
                    <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Lista de Exames</span></a>
                </li>
                <li>
                    <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Eventos</span></a>
                </li>
                <li>
                    <a href="time-table.html"><i class="fas fa-table"></i> <span>Tabela de Horário</span></a>
                </li>
                <li>
                    <a href="library.html"><i class="fas fa-book"></i> <span>Biblioteca</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="blog.html">Todos Blogs</a></li>
                        <li><a href="add-blog.html">Adicionar Blog</a></li>
                        <li><a href="edit-blog.html">Editar Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="settings.html"><i class="fas fa-cog"></i> <span>Configurações</span></a>
                </li>
                <li class="menu-title">
                    <span>Páginas</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-shield-alt"></i> <span> Autenticação </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="login.html">Iniciar Sessão</a></li>
                        <li><a href="register.html">Cadastrar</a></li>
                        <li><a href="forgot-password.html">Esqueci a Senha</a></li>
                        <!--<li><a href="error-404.html">Error Page</a></li>-->
                    </ul>
                </li>
                <!--<li>
                    <a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
                </li>-->
                <!--<li class="menu-title">
                    <span>Others</span>
                </li>
                <li>
                    <a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                </li>
                <li>
                    <a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
                </li>
                <li>
                    <a href="transport.html"><i class="fas fa-bus"></i> <span>Transport</span></a>
                </li>
                <li class="menu-title">
                    <span>UI Interface</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="alerts.html">Alerts</a></li>
                        <li><a href="accordions.html">Accordions</a></li>
                        <li><a href="avatar.html">Avatar</a></li>
                        <li><a href="badges.html">Badges</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="buttongroup.html">Button Group</a></li>
                        <li><a href="breadcrumbs.html">Breadcrumb</a></li>
                        <li><a href="cards.html">Cards</a></li>
                        <li><a href="carousel.html">Carousel</a></li>
                        <li><a href="dropdowns.html">Dropdowns</a></li>
                        <li><a href="grid.html">Grid</a></li>
                        <li><a href="images.html">Images</a></li>
                        <li><a href="lightbox.html">Lightbox</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="modal.html">Modals</a></li>
                        <li><a href="offcanvas.html">Offcanvas</a></li>
                        <li><a href="pagination.html">Pagination</a></li>
                        <li><a href="popover.html">Popover</a></li>
                        <li><a href="progress.html">Progress Bars</a></li>
                        <li><a href="placeholders.html">Placeholders</a></li>
                        <li><a href="rangeslider.html">Range Slider</a></li>
                        <li><a href="spinners.html">Spinner</a></li>
                        <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                        <li><a href="tab.html">Tabs</a></li>
                        <li><a href="toastr.html">Toasts</a></li>
                        <li><a href="tooltip.html">Tooltip</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="video.html">Video</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="box"></i> <span>Elements </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="ribbon.html">Ribbon</a></li>
                        <li><a href="clipboard.html">Clipboard</a></li>
                        <li><a href="drag-drop.html">Drag & Drop</a></li>
                        <li><a href="rating.html">Rating</a></li>
                        <li><a href="text-editor.html">Text Editor</a></li>
                        <li><a href="counter.html">Counter</a></li>
                        <li><a href="scrollbar.html">Scrollbar</a></li>
                        <li><a href="notification.html">Notification</a></li>
                        <li><a href="stickynote.html">Sticky Note</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="chart-apex.html">Apex Charts</a></li>
                        <li><a href="chart-js.html">Chart Js</a></li>
                        <li><a href="chart-morris.html">Morris Charts</a></li>
                        <li><a href="chart-flot.html">Flot Charts</a></li>
                        <li><a href="chart-peity.html">Peity Charts</a></li>
                        <li><a href="chart-c3.html">C3 Charts</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="award"></i> <span> Icons </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                        <li><a href="icon-feather.html">Feather Icons</a></li>
                        <li><a href="icon-ionic.html">Ionic Icons</a></li>
                        <li><a href="icon-material.html">Material Icons</a></li>
                        <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                        <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                        <li><a href="icon-themify.html">Themify Icons</a></li>
                        <li><a href="icon-weather.html">Weather Icons</a></li>
                        <li><a href="icon-typicon.html">Typicon Icons</a></li>
                        <li><a href="icon-flag.html">Flag Icons</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                        <li><a href="form-input-groups.html">Input Groups </a></li>
                        <li><a href="form-horizontal.html">Horizontal Form </a></li>
                        <li><a href="form-vertical.html"> Vertical Form </a></li>
                        <li><a href="form-mask.html"> Form Mask </a></li>
                        <li><a href="form-validation.html"> Form Validation </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="tables-basic.html">Basic Tables </a></li>
                        <li><a href="data-tables.html">Data Table </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> <span>Level 1</span></a>
                        </li>
                    </ul>
                </li>-->
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar (menu) -->
