// 后台删数据
function confirmDel6(suggestid)
{
    if(window.confirm("确定要删除该数据吗？(注意：无法撤销)"))
        {
            location.href = "../admin/delete_suggest.php?suggestid="+suggestid;
        }
}
// 后台删数据
