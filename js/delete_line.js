// 后台删数据
function confirmDel1(dataid)
{
    if(window.confirm("确定要删除该数据吗？(注意：无法撤销)"))
        {
            location.href = "../admin/delete_linedata.php?dataid="+dataid;
        }
}
// 后台删数据
