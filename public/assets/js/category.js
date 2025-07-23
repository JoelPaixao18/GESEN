document.addEventListener('DOMContentLoaded', function () {
    // Elementos principais
    const tipoSelect = document.getElementById('school_type');
    const nivelSelect = document.getElementById('school_level');
    const cursoSelect = document.getElementById('school_course');
    const classeSelect = document.getElementById('school_class');
    const turnoSelect = document.getElementById('school_bouts');
    const categoriaSelect = document.getElementById('school_category');

    // Divs de exibição
    const nivelDiv = document.getElementById('nivel-div');
    const cursoDiv = document.getElementById('curso-div');
    const classeDiv = document.getElementById('classe-div');
    const turnoDiv = document.getElementById('turno-div');
    const categoriaDiv = document.getElementById('categoria-div');

    // Dados dinâmicos
    const data = {
        niveis: {
            publica: ['Iº Ciclo Ensino Primário', 'IIº Ciclo Ensino Secundário'],
            privada: ['Iº Ciclo Ensino Primário', 'IIº Ciclo Ensino Secundário']
        },
        cursos: {
            'iiº ciclo ensino secundário': [
                { value: 'administracao', text: 'Administração' },
                { value: 'ciencias_juridicas', text: 'Ciências Jurídicas' },
                { value: 'ciencias_sociais', text: 'Ciências Sociais' },
                { value: 'ciencias_fisicas_biologicas', text: 'Ciências Físicas e Biológicas' },
                { value: 'anotomia', text: 'Anotômia' },
                { value: 'arquitetura', text: 'Arquitetura' },
                { value: 'biologia', text: 'Biologia' },
                { value: 'informatica', text: 'Informática' },
                { value: 'eletronica', text: 'Eletrónica' },
                { value: 'multimidia', text: 'Multimídia' },
                { value: 'enfermagem', text: 'Enfermagem' },
                { value: 'gestao', text: 'Gestão Empresarial' },
                { value: 'contabilidade', text: 'Contabilidade' },
                { value: 'mecanica', text: 'Mecânica' },
                { value: 'construcao_civil', text: 'Construção Civil' }
            ]
        },
        categorias: [
            { value: 'a', text: 'Categoria A' },
            { value: 'b', text: 'Categoria B' },
            { value: 'c', text: 'Categoria C' },
            { value: 'd', text: 'Categoria D' }
        ],
        classes: {
            'iº ciclo ensino primário': [
                'Iniciação', '1ª Classe', '2ª Classe', '3ª Classe',
                '4ª Classe', '5ª Classe', '6ª Classe', '7ª Classe',
                '8ª Classe', '9ª Classe'
            ],
            'iiº ciclo ensino secundário': [
                '10ª Classe', '11ª Classe', '12ª Classe', '13ª Classe'
            ]
        },
        turnos: [
            { value: 'manha', text: 'Manhã' },
            { value: 'tarde', text: 'Tarde' },
            { value: 'noite', text: 'Noite' }
        ]
    };

    // Quando o tipo de escola muda
    tipoSelect.addEventListener('change', function () {
        const tipo = this.value;

        // Resetar todos os selects
        resetSelect(nivelSelect);
        resetSelect(cursoSelect);
        resetSelect(classeSelect);
        resetSelect(turnoSelect);
        resetSelect(categoriaSelect);

        // Esconder todos os campos dependentes
        cursoDiv.style.display = 'none';
        classeDiv.style.display = 'none';
        turnoDiv.style.display = 'none';
        categoriaDiv.style.display = 'none';

        if (tipo) {
            // Mostrar nível (para ambos os tipos)
            nivelDiv.style.display = 'block';

            // Popular níveis disponíveis
            data.niveis[tipo].forEach(nivel => {
                addOption(nivelSelect, nivel.toLowerCase(), nivel);
            });

            // Mostrar categoria apenas para privada
            if (tipo === 'privada') {
                categoriaDiv.style.display = 'block';
                // Popular categorias
                data.categorias.forEach(cat => {
                    addOption(categoriaSelect, cat.value, cat.text);
                });
            }
        } else {
            nivelDiv.style.display = 'none';
        }
    });

    // Quando o nível muda
    nivelSelect.addEventListener('change', function () {
        const nivel = this.value.toLowerCase();

        resetSelect(cursoSelect);
        resetSelect(turnoSelect);
        resetSelect(classeSelect);

        cursoDiv.style.display = 'none';
        turnoDiv.style.display = 'none';
        classeDiv.style.display = 'none';

        if (nivel === 'iiº ciclo ensino secundário') {
            // Popular cursos para IIº ciclo
            data.cursos[nivel].forEach(curso => {
                addOption(cursoSelect, curso.value, curso.text);
            });
            cursoDiv.style.display = 'block';
            // Popular turnos
            data.turnos.forEach(turno => {
                addOption(turnoSelect, turno.value, turno.text);
            });
            turnoDiv.style.display = 'block';

        } else if (nivel === 'iº ciclo ensino primário') {
            // Popular classes diretamente para Iº ciclo
            data.classes[nivel].forEach(classe => {
                addOption(classeSelect, classe.toLowerCase(), classe);
            });
            classeDiv.style.display = 'block';
            //Popular turnos
            data.turnos.forEach(turno => {
                addOption(turnoSelect, turno.value, turno.text);
            });
            turnoDiv.style.display = 'block';
        }
    });

    // Quando o curso muda (apenas para IIº ciclo)
    cursoSelect.addEventListener('change', function () {
        if (nivelSelect.value.toLowerCase() === 'iiº ciclo ensino secundário') {
            resetSelect(classeSelect);

            // Popular classes do IIº ciclo
            data.classes['iiº ciclo ensino secundário'].forEach(classe => {
                addOption(classeSelect, classe.toLowerCase(), classe);
            });

            classeDiv.style.display = 'block';
        }
    });

    // Funções auxiliares
    function addOption(select, value, text) {
        const option = document.createElement('option');
        option.value = value;
        option.textContent = text;
        select.appendChild(option);
    }

    function resetSelect(select) {
        select.innerHTML = '<option value="">Selecione uma das opções</option>';
    }
});
