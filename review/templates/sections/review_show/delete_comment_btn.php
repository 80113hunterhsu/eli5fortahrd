<a href="#confirmDelete" onClick="confirmDelete();" class="d-flex align-items-center">
    <script>
        function confirmDelete() {
            if (confirm('確認刪除這個評分或評論？')) {
                window.location = "./templates/sections/review_show/delete_comment_action.php?review_id=<?php echo $review['review_id']; ?>"
            }
        }
    </script>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-trash-fill mr-3" viewBox="0 0 16 16">
        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
    </svg>
</a>