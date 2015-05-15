
//  index search
function mySearch(){
    var keys1  =  $("#keys").val()
    var codes = '/\\%&#+_';
    var spacecodes = ' ';
    var allcodes = ' /\\%&+_';
    var textvalue =  keys1;
    var spacevalue = keys1;
    var allvalue = keys1;
    var codearray = codes.split('');
    var spacearray = spacecodes.split('');
    var allarray = allcodes.split('');
    //循环替换非法字符不包含空格
    for (i = 0; i < codearray.length; i++) {
        while (textvalue.indexOf(codearray[i]) != -1) {
            textvalue = textvalue.replace(codearray[i], '');
        }
    }
    //替换关键字只包含空格
    for (j = 0; j < spacearray.length; j++) {
        while (spacevalue.indexOf(spacearray[j]) != -1) {
            spacevalue = spacevalue.replace(spacearray[j], '');
        }
    }
    //替换特殊字符带空格的关键字
    for (k = 0; k < allarray.length; k++) {
        while (allvalue.indexOf(allarray[k]) != -1) {
            allvalue = allvalue.replace(allarray[k], '');
        }
    }

    if(keys1 ==''){
        alert("请输入关键字！");
        return null;
    }else if(keys1 =='?'){
        alert("关键字不允许包含非法字符！");
        return null;
    }else if(spacevalue==''){
        alert("请输入关键字！");
        return null;
    }else if(textvalue==''){
        alert("关键字不允许包含非法字符！");
        return null;
    }else if(textvalue=='?'){
        alert("关键字不允许包含非法字符！");
        return null;
    }else if(spacevalue=='?'){
        alert("关键字不允许包含非法字符！");
        return null;
    }else if(allvalue=='?'){
        alert("关键字不允许包含非法字符！");
        return null;
    }else{
        window.open("/search/all/1_0_"+textvalue);
    }
}


function allSearch(){
    var keys1  =  $("#keys").val()
    var codes = '<>/@#%?？&！,，..=￥';
    var textvalue =  keys1;
    var codearray = codes.split('');
    //循环替换非法字符
    for (i = 0; i < codearray.length; i++) {
        while (textvalue.indexOf(codearray[i]) != -1) {
            textvalue = textvalue.replace(codearray[i], '');
        }
    }

    if(keys1 ==''){
        // showLoginDialog("input keys,Please!");
        return null;
    }else if(textvalue==''){
        alert("关键字不允许包含非法字符!");
        return null;
    }else{
        window.location.href="/search/all/1_0_"+textvalue;
    }
}



function searchapp(){
    var keys1  =  $("#appkeys").val()
    var codes = '/\\%&#+_';
    var spacecodes = ' ';
    var allcodes = ' /\\%&+_';
    var textvalue =  keys1;
    var spacevalue = keys1;
    var allvalue = keys1;
    var codearray = codes.split('');
    var spacearray = spacecodes.split('');
    var allarray = allcodes.split('');
    //循环替换非法字符不包含空格
    for (i = 0; i < codearray.length; i++) {
        while (textvalue.indexOf(codearray[i]) != -1) {
            textvalue = textvalue.replace(codearray[i], '');
        }
    }
    //替换关键字只包含空格
    for (j = 0; j < spacearray.length; j++) {
        while (spacevalue.indexOf(spacearray[j]) != -1) {
            spacevalue = spacevalue.replace(spacearray[j], '');
        }
    }
    //替换特殊字符带空格的关键字
    for (k = 0; k < allarray.length; k++) {
        while (allvalue.indexOf(allarray[k]) != -1) {
            allvalue = allvalue.replace(allarray[k], '');
        }
    }

    if(keys1 ==''){
        alert("请输入关键字！");
        return null;
    }else if(keys1 =='?'){
        alert("关键字不允许包含非法字符！");
        return null;
    }else if(spacevalue==''){
        alert("请输入关键字！");
        return null;
    }else if(textvalue==''){
        alert("关键字不允许包含非法字符！");
        return null;
    }else if(textvalue=='?'){
        alert("关键字不允许包含非法字符！");
        return null;
    }else if(spacevalue=='?'){
        alert("关键字不允许包含非法字符！");
        return null;
    }else if(allvalue=='?'){
        alert("关键字不允许包含非法字符！");
        return null;
    }else{
        window.location.href="/search/all/1_0_"+textvalue;

    }
}

function flashearch(keys){
    var codes = '<>/@#%?？&！,，..=￥';
    var textvalue =  keys;
    var codearray = codes.split('');
    //循环替换非法字符
    for (i = 0; i < codearray.length; i++) {
        while (textvalue.indexOf(codearray[i]) != -1) {
            textvalue = textvalue.replace(codearray[i], '');
        }
    }
    if(textvalue==''){
        alert("关键字不允许包含非法字符!");
        return null;
    }
    window.open("/search/all/1_0_"+textvalue+"",'_self');
}


function getPicoImage(type){
    var t = type.split(",");
    var img="";
    for(var i =0;i<t.length;i++){
        if(t[i]==1){
            img=img+"<img src='/images/android_ico.png' />&nbsp;&nbsp;";
        }else if(t[i]==2){
            img=img+"<img src='/images/apple_ico.png'/>&nbsp;&nbsp;";
        }else if(t[i]==3){
            img=img+"<img src='/images/wp_ico.png'/>";
        }
    }
    return img
}