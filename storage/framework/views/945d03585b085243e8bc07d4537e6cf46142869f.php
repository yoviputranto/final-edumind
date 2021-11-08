<center>
    <h2><?php echo e($article->title); ?></h2>
    <img src="<?php echo e(storage_path('app/public/' . $article->image)); ?>" width="500px" alt="">

</center>
<p style="text-align: justify"><?php echo $article->body; ?></p>
<?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/frontend/printArticle.blade.php ENDPATH**/ ?>