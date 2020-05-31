function confirmDel4(gdmuid)
        {
        if(window.confirm("确定要删除该文章吗？(注意：无法撤销)"))
        {
            location.href = "../admin/delete_gdmu.php?gdmuid="+gdmuid;
        }
        }