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
function write_on_usertype(usertype){
    $('#user-type-span').text(usertype);

    document.getElementById('div-input-cpf-cnpj').innerHTML = "";

    if (usertype != undefined){
        if (usertype == 'CPF'){
            const div = document.createElement('div');
            div.className = 'row';
            div.innerHTML = `<input type="text" id="cadtipoinput" style="padding-left: 10px;" maxlength="14" placeholder="Digite seu cpf/cnpj" onkeydown="javascript: fMasc( this, CPF );">`;
            document.getElementById('div-input-cpf-cnpj').appendChild(div);
        }
        else if (usertype == 'CNPJ'){
            const div = document.createElement('div');
            div.className = 'row';
            div.innerHTML = `<input type="text" id="cadtipoinput" style="padding-left: 10px;" maxlength="20" placeholder="Digite seu cpf/cnpj" onkeydown="javascript: fMasc( this, CNPJ );">`;
            document.getElementById('div-input-cpf-cnpj').appendChild(div);
        }
    }
}