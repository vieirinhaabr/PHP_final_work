function fMasc(objeto, mascara) {
    obj=objeto
    masc=mascara
    setTimeout("fMascEx()",1)
}
function fMascEx() {
    obj.value=masc(obj.value)
}
function CNPJ(cnpj){
    cnpj=cnpj.replace(/\D/g,"")
    cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
    cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
    cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
    cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
    return cnpj
}
function CPF(cpf){
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return cpf
}

function credential_validator_cpf(objeto){
    credential = objeto.value;

    document.getElementById('div-small-cpf-cnpj').innerHTML = "";

    if (credential != undefined){
        if (credential.length != 14){
            const div = document.createElement('div');
            div.className = 'row';
            div.innerHTML = `<small id="emailHelp" class="form-text red-text">Credencial incompleta!!!</small>`;
            document.getElementById('div-small-cpf-cnpj').appendChild(div);
        }
        else{
            document.getElementById('div-small-cpf-cnpj').innerHTML = "";
        }
    }
}

function credential_validator_cnpj(objeto){
    credential = objeto.value;

    document.getElementById('div-small-cpf-cnpj').innerHTML = "";

    if (credential != undefined){
        if (credential.length != 20){
            const div = document.createElement('div');
            div.className = 'row';
            div.innerHTML = `<small id="emailHelp" class="form-text red-text">Credencial incompleta!!!</small>`;
            document.getElementById('div-small-cpf-cnpj').appendChild(div);
        }
        else{
            document.getElementById('div-small-cpf-cnpj').innerHTML = "";
        }
    }
}

function write_on_usertype(usertype){
    $('#user-type-span').text(usertype);

    document.getElementById('div-input-cpf-cnpj').innerHTML = "";
    document.getElementById('usertype').innerHTML = "";

    if (usertype != undefined){
        if (usertype == 'CPF'){
            const div = document.createElement('div');
            div.className = 'row';
            div.innerHTML = `<input name="cadtipoinput" type="text" id="cadtipoinput" id="cadtipoinput" style="padding-left: 10px;" minlength="14" maxlength="14" placeholder="Digite seu cpf" onkeydown="javascript: fMasc( this, CPF ); credential_validator_cpf( this );" required>`;
            document.getElementById('div-input-cpf-cnpj').appendChild(div);
            const div_usertype = document.createElement('div');
            div_usertype.className = 'row';
            div_usertype.innerHTML = `<input name="tiposuser" type="hidden" id="tiposuser" class="tiposuser" style="padding-left: 10px;" value="CPF">`;
            document.getElementById('usertype').appendChild(div_usertype);
        }
        else if (usertype == 'CNPJ'){
            const div = document.createElement('div');
            div.className = 'row';
            div.innerHTML = `<input name="cadtipoinput" type="text" id="cadtipoinput" id="cadtipoinput" style="padding-left: 10px;" minlength="20" maxlength="20" placeholder="Digite seu cnpj" onkeydown="javascript: fMasc( this, CNPJ ); credential_validator_cnpj( this );" required>`;
            document.getElementById('div-input-cpf-cnpj').appendChild(div);
            const div_usertype = document.createElement('div');
            div_usertype.className = 'row';
            div_usertype.innerHTML = `<input name="tiposuser" type="hidden" id="tiposuser" class="tiposuser" style="padding-left: 10px;" value="CNPJ">`;
            document.getElementById('usertype').appendChild(div_usertype);
        }
    }
}