<?php $view->extend('ForumBundle::layout.php') ?>
<?php $view['slots']->set('title', 'Topics List') ?>
<div class="forum forum_index">
    <ul class="crumbs">
        <li><a href="<?php echo $view['forum']->urlFor() ?>">Forum</a></li>
        <li><?php echo $category->getName() ?></li>
    </ul>
    <div class="main topics">
        <h2><?php echo $category->getName() ?></h2>
        <?php echo $view['actions']->render('ForumBundle:Topic:list', array('category' => $category ), array('query' => array('page' => $page))) ?>
    </div>
    <div class="side categories">
        <h2>Categories</h2>
        <?php echo $view['actions']->render('ForumBundle:Category:list') ?>
        <h2>Participate</h2>
        <p><a href="<?php echo $view['router']->generate('forum_topic_new', array('categorySlug' => $category->getSlug())) ?>">Create a new topic</a></p>
    </div>
</div>
