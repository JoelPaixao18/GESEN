@extends('admin.students.adicionar.layout.principal')

@section('title', 'Gesen - Alunos')

@section('adicionar-content')

    <!-- Page Wrapper (corpo)-->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Adicionar Aluno</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="students.html">Alunos</a></li>
                                <li class="breadcrumb-item active">Add Alunos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Informações do Aluno <span><a
                                                    href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                                        </h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Nome Completo <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Nome Completo do Aluno">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Genero <span class="login-danger">*</span></label>
                                            <select class="form-control select">
                                                <option>Selecione o Genero</option>
                                                <option>Feminino</option>
                                                <option>Masculino</option>
                                                <option>Outro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Data de Nascimento <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text"
                                                placeholder="DD-MM-YYYY">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>E-Mail <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Endereço de e-mail">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Número de Proc. <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="ID do Aluno">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Número de Telefone <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="9xx xxx xxx">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group students-up-files">
                                            <label>Upload foto do Aluno(150px X 150px)</label>
                                            <div class="uplod">
                                                <label class="file-upload image-upbtn mb-0">
                                                    Escolher nos ficheiros <input type="file">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
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
