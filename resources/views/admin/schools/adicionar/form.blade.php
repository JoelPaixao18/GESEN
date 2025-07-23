@extends('admin.schools.adicionar.layout.principal')

@section('title', 'GESEN - Escolas')

@section('adicionar-content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-title <!-- Page Wrapper (corpo)-->
        <div class="page-wrapper">
                        <div class="content container-fluid">

                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col-sm-12">
                                        <div class="page-sub-header">
                                            <h3 class="page-title">Adicionar Escola</h3>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="students.html">Escola</a></li>
                                                <li class="breadcrumb-item active">Add Escola</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card comman-shadow">
                                        <div class="card-body">
                                            <form action="#" method="#">

                                                @csrf

                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5 class="form-title student-info">Informações da Escola <span><a
                                                                    href="javascript:;"><i
                                                                        class="feather-more-vertical"></i></a></span></h5>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Nome da Escola (Instituição) <span
                                                                    class="login-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Digite o nome" name="school_name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>E-Mail <span class="login-danger">*</span></label>
                                                            <input class="form-control" type="email"
                                                                placeholder="Endereço de Email" name="school_email"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Nº da Escola </label>
                                                            <input class="form-control" type="text"
                                                                placeholder="ID da Escola" name="school_id">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Nº Telefónico <span class="login-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Contacto Telefónico" name="school_phone"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <!-- Tipo de Escola (Ctegorias)-->
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Tipo de Escola <span
                                                                    class="login-danger">*</span></label>
                                                            <select class="form-control select" id="school_type"
                                                                name="school_type" required>
                                                                <option value="">Por Favor Seleciona o Tipo de Escola
                                                                </option>
                                                                <option value="publica">Pública</option>
                                                                <option value="privada">Privada</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Nível de Escola (Categorias "essa opção vale para os dois tipos (Pública e Privada)")-->
                                                    <div class="col-12 col-sm-4" id="nivel-div" style="display: none;">
                                                        <div class="form-group local-forms">
                                                            <label>Nivel de Escola <span
                                                                    class="login-danger">*</span></label>
                                                            <select class="form-control select" name="school_level"
                                                                id="school_level" required>
                                                                <option value="">Seleciona o Nivel de Escola</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Categoria de Escola (Categorias "essa opção vale apenas para o Tipo "Privado" deve aparecer ao mesmo tempo que o nivel de escola ")-->
                                                    <div class="col-12 col-sm-4" id="categoria-div" style="display: none;">
                                                        <div class="form-group local-forms">
                                                            <label>Categoria de Escola <span
                                                                    class="login-danger">*</span></label>
                                                            <select class="form-control select" name="school_category"
                                                                id="school_category" required>
                                                                <option value="">Selecione a Categoria da Escola
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Cursos (Categorias "Essa opção é apenas para o IIº ciclo")-->
                                                    <div class="col-12 col-sm-4" id="curso-div" style="display: none;">
                                                        <div class="form-group local-forms">
                                                            <label>Curso <span class="login-danger">*</span></label>
                                                            <select class="form-control select" id="school_course"
                                                                name="school_course" required>
                                                                <option value="">Selecione o Curso</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Classes (Categorias depende do nivel de escola " Iº ciclo e IIº ciclo (à do IIº ciclo vai depender do curso, ou seja, cada curso selecionado aparece o campo das classes do IIº ciclo)" )-->
                                                    <div class="col-12 col-sm-4" id="classe-div" style="display: none;">
                                                        <div class="form-group local-forms">
                                                            <label>Classes <span class="login-danger">*</span></label>
                                                            <select class="form-control select" name="school_class"
                                                                id="school_class" required>
                                                                <option value="">Por Favor Selecione a Classe
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Turnos (Categorias "essa opção vale para os dois tipos (Pública e Privada)")-->
                                                    <div class="col-12 col-sm-4" id="turno-div" style="display: none;">
                                                        <div class="form-group local-forms">
                                                            <label>Turnos <span class="login-danger">*</span></label>
                                                            <select class="form-control select" name="school_bouts"
                                                                id="school_bouts" required>
                                                                <option value="">Por Favor Selecione o Turno</option>
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Endereço da Escola/Instituição -->
                                                    <div class="col-12">
                                                        <h5 class="form-title student-info">Endereço da Escola
                                                            (Instituição) <span><a href="javascript:;"></a></span></h5>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Província <span class="login-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Província da Escola" name="school_address"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Município <span class="login-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Município da Escola" name="school_address"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group local-forms">
                                                            <label>Descricão<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Detalhes do Endereço(localização) de Escola/Instituição"
                                                                name="school_description" required>
                                                        </div>
                                                    </div>
                                                    <!--<<div class="col-lg-12 col-md-12">
                                                                                    <div class="form-group local-forms">
                                                                                        <label>Description</label>
                                                                                        <div id="editor"></div>
                                                                                    </div>
                                                                                </div>-->

                                                    <div class="col-12">
                                                        <div class="student-submit">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- /Page Wrapper (corpo)-->
            @endsection
