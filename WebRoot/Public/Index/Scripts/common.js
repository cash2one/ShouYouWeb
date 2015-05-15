/*
$("#a1").click(function() {
    hiAlert("欢迎来到sucaihuo.com", "提示");
});
$("#a2").click(function() {
    hiConfirm('你确认此操作吗?', '确认框', function(r) {
        hiOverAlert('你的反馈是: ' + r);
    });
});
$("#a3").click(function() {
    hiPrompt('请填写:', '默认值', '输入框', function(r) {
        if (r)
            hiOverAlert('你填入的内容是“' + r + '”');
    });
});
$("#a4").click(function() {
    hiBox('#showbox', '标题', 400, '', '', '.a_close');
});
$("#a5").click(function() {
    hiOverAlert('操作提示条信息', 1500);
});
*/


var CAlert = function(content,title){
    hiAlert(content,title);
};

var CBox = function(ele,title){
    hiBox(ele,title,400,'','','','');
}