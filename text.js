var mySplitText = new SplitText("#quote", {type:"words, chars"});
TweenLite.set("#quote", {perspective:400});

TweenMax.staggerFrom(mySplitText.chars, 0.8, {opacity:0, scale:0, y:80, rotationX:180, transformOrigin:"0% 50% -50", ease:Back.easeOut}, 0.01, allDone);
function allDone(){
    mySplitText.revert();
}
