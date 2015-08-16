<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
function autoload679875ef60343fd604aa0fa4d353e67e($class) {
    static $classes = null;
    if ($classes === null) {
        $classes = array(
            'chapterthree\\applenews\\document' => '/src/Document.php',
            'chapterthree\\applenews\\document\\anchor' => '/src/Document/Anchor.php',
            'chapterthree\\applenews\\document\\animations\\componentanimations\\appearanimation' => '/src/Document/Animations/ComponentAnimations/AppearAnimation.php',
            'chapterthree\\applenews\\document\\animations\\componentanimations\\componentanimation' => '/src/Document/Animations/ComponentAnimations/ComponentAnimation.php',
            'chapterthree\\applenews\\document\\animations\\componentanimations\\fadeinanimation' => '/src/Document/Animations/ComponentAnimations/FadeInAnimation.php',
            'chapterthree\\applenews\\document\\animations\\componentanimations\\moveinanimation' => '/src/Document/Animations/ComponentAnimations/MoveInAnimation.php',
            'chapterthree\\applenews\\document\\animations\\componentanimations\\scalefadeanimation' => '/src/Document/Animations/ComponentAnimations/ScaleFadeAnimation.php',
            'chapterthree\\applenews\\document\\animations\\scenes\\fadingstickyheader' => '/src/Document/Animations/Scenes/FadingStickyHeader.php',
            'chapterthree\\applenews\\document\\animations\\scenes\\parallaxscaleheader' => '/src/Document/Animations/Scenes/ParallaxScaleHeader.php',
            'chapterthree\\applenews\\document\\animations\\scenes\\scene' => '/src/Document/Animations/Scenes/Scene.php',
            'chapterthree\\applenews\\document\\base' => '/src/Document/Base.php',
            'chapterthree\\applenews\\document\\behaviors\\backgroundmotion' => '/src/Document/Behaviors/BackgroundMotion.php',
            'chapterthree\\applenews\\document\\behaviors\\backgroundparallax' => '/src/Document/Behaviors/BackgroundParallax.php',
            'chapterthree\\applenews\\document\\behaviors\\behavior' => '/src/Document/Behaviors/Behavior.php',
            'chapterthree\\applenews\\document\\behaviors\\motion' => '/src/Document/Behaviors/Motion.php',
            'chapterthree\\applenews\\document\\behaviors\\parallax' => '/src/Document/Behaviors/Parallax.php',
            'chapterthree\\applenews\\document\\behaviors\\springy' => '/src/Document/Behaviors/Springy.php',
            'chapterthree\\applenews\\document\\components\\advertisements\\banneradvertisement' => '/src/Document/Components/Advertisements/BannerAdvertisement.php',
            'chapterthree\\applenews\\document\\components\\advertisements\\mediumrectangleadvertisement' => '/src/Document/Components/Advertisements/MediumRectangleAdvertisement.php',
            'chapterthree\\applenews\\document\\components\\audio' => '/src/Document/Components/Audio.php',
            'chapterthree\\applenews\\document\\components\\author' => '/src/Document/Components/Author.php',
            'chapterthree\\applenews\\document\\components\\body' => '/src/Document/Components/Body.php',
            'chapterthree\\applenews\\document\\components\\byline' => '/src/Document/Components/Byline.php',
            'chapterthree\\applenews\\document\\components\\caption' => '/src/Document/Components/Caption.php',
            'chapterthree\\applenews\\document\\components\\chapter' => '/src/Document/Components/Chapter.php',
            'chapterthree\\applenews\\document\\components\\component' => '/src/Document/Components/Component.php',
            'chapterthree\\applenews\\document\\components\\container' => '/src/Document/Components/Container.php',
            'chapterthree\\applenews\\document\\components\\componentnested' => '/src/Document/Components/ComponentNested.php',
            'chapterthree\\applenews\\document\\components\\divider' => '/src/Document/Components/Divider.php',
            'chapterthree\\applenews\\document\\components\\embedwebvideo' => '/src/Document/Components/EmbedWebVideo.php',
            'chapterthree\\applenews\\document\\components\\figure' => '/src/Document/Components/Figure.php',
            'chapterthree\\applenews\\document\\components\\gallery' => '/src/Document/Components/Gallery.php',
            'chapterthree\\applenews\\document\\components\\header' => '/src/Document/Components/Header.php',
            'chapterthree\\applenews\\document\\components\\heading' => '/src/Document/Components/Heading.php',
            'chapterthree\\applenews\\document\\components\\illustrator' => '/src/Document/Components/Illustrator.php',
            'chapterthree\\applenews\\document\\components\\image' => '/src/Document/Components/Image.php',
            'chapterthree\\applenews\\document\\components\\instagram' => '/src/Document/Components/Instagram.php',
            'chapterthree\\applenews\\document\\components\\intro' => '/src/Document/Components/Intro.php',
            'chapterthree\\applenews\\document\\components\\logo' => '/src/Document/Components/Logo.php',
            'chapterthree\\applenews\\document\\components\\mosaic' => '/src/Document/Components/Mosaic.php',
            'chapterthree\\applenews\\document\\components\\music' => '/src/Document/Components/Music.php',
            'chapterthree\\applenews\\document\\components\\photo' => '/src/Document/Components/Photo.php',
            'chapterthree\\applenews\\document\\components\\photographer' => '/src/Document/Components/Photographer.php',
            'chapterthree\\applenews\\document\\components\\portrait' => '/src/Document/Components/Portrait.php',
            'chapterthree\\applenews\\document\\components\\pullquote' => '/src/Document/Components/Pullquote.php',
            'chapterthree\\applenews\\document\\components\\quote' => '/src/Document/Components/Quote.php',
            'chapterthree\\applenews\\document\\components\\scalableimage' => '/src/Document/Components/ScalableImage.php',
            'chapterthree\\applenews\\document\\components\\section' => '/src/Document/Components/Section.php',
            'chapterthree\\applenews\\document\\components\\text' => '/src/Document/Components/Text.php',
            'chapterthree\\applenews\\document\\components\\title' => '/src/Document/Components/Title.php',
            'chapterthree\\applenews\\document\\components\\tweet' => '/src/Document/Components/Tweet.php',
            'chapterthree\\applenews\\document\\components\\video' => '/src/Document/Components/Video.php',
            'chapterthree\\applenews\\document\\contentinset' => '/src/Document/ContentInset.php',
            'chapterthree\\applenews\\document\\galleryitem' => '/src/Document/GalleryItem.php',
            'chapterthree\\applenews\\document\\layouts\\componentlayout' => '/src/Document/Layouts/ComponentLayout.php',
            'chapterthree\\applenews\\document\\layouts\\layout' => '/src/Document/Layouts/Layout.php',
            'chapterthree\\applenews\\document\\margin' => '/src/Document/Margin.php',
            'chapterthree\\applenews\\document\\markdown' => '/src/Document/Markdown.php',
            'chapterthree\\applenews\\document\\metadata' => '/src/Document/Metadata.php',
            'chapterthree\\applenews\\document\\styles\\border' => '/src/Document/Styles/Border.php',
            'chapterthree\\applenews\\document\\styles\\componentstyle' => '/src/Document/Styles/ComponentStyle.php',
            'chapterthree\\applenews\\document\\styles\\componenttextstyle' => '/src/Document/Styles/ComponentTextStyle.php',
            'chapterthree\\applenews\\document\\styles\\documentstyle' => '/src/Document/Styles/DocumentStyle.php',
            'chapterthree\\applenews\\document\\styles\\dropcapstyle' => '/src/Document/Styles/DropCapStyle.php',
            'chapterthree\\applenews\\document\\styles\\fills\\fill' => '/src/Document/Styles/Fills/Fill.php',
            'chapterthree\\applenews\\document\\styles\\fills\\gradients\\colorstop' => '/src/Document/Styles/Fills/Gradients/ColorStop.php',
            'chapterthree\\applenews\\document\\styles\\fills\\gradients\\gradientfill' => '/src/Document/Styles/Fills/Gradients/GradientFill.php',
            'chapterthree\\applenews\\document\\styles\\fills\\gradients\\lineargradientfill' => '/src/Document/Styles/Fills/Gradients/LinearGradientFill.php',
            'chapterthree\\applenews\\document\\styles\\fills\\imagefill' => '/src/Document/Styles/Fills/ImageFill.php',
            'chapterthree\\applenews\\document\\styles\\fills\\videofill' => '/src/Document/Styles/Fills/VideoFill.php',
            'chapterthree\\applenews\\document\\styles\\inlinetextstyle' => '/src/Document/Styles/InlineTextStyle.php',
            'chapterthree\\applenews\\document\\styles\\strokestyle' => '/src/Document/Styles/StrokeStyle.php',
            'chapterthree\\applenews\\document\\styles\\textstrokestyle' => '/src/Document/Styles/TextStrokeStyle.php',
            'chapterthree\\applenews\\document\\styles\\textstyle' => '/src/Document/Styles/TextStyle.php',
            'chapterthree\\applenews\\pushapi' => '/src/PushAPI.php',
            'chapterthree\\applenews\\pushapi\\base' => '/src/PushAPI/Base.php',
            'chapterthree\\applenews\\pushapi\\curl' => '/src/PushAPI/Curl.php'
        );
    }
    $cn = strtolower($class);
    if (isset($classes[$cn])) {
        require dirname(__FILE__) . $classes[$cn];
    }
}
spl_autoload_register('autoload679875ef60343fd604aa0fa4d353e67e', true);
// @codeCoverageIgnoreEnd