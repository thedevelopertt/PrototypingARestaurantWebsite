function landingAnimation(){
    const timeline = new TimelineMax({
        onComplete : function(){
            buttonTimeline.resume()
        },
        delay : 0.5
    });
    timeline
        .from(
            "img",
            1,
            {
                opacity : 0,
                easing : Power3.easeOut
            }
        )
        .from(
            ".landing-lead > p",
            0.4,
            {
                opacity : 0,
                easing : Power3.easeOut
            }
        )
        .from(
            ".landing-action",
            0.5,
            {
                left : -40,
                opacity : 0,
                easing : Power3.easeOut
            }
        )

    const buttonTimeline = new TimelineMax({
        paused : true,
        repeat : -1,
        repeatDelay: 5
    })

    // const landingAction = $(".landing-action > a")
    // const _h = landingAction.height();
    // const _w = landingAction.width();
    // const btnShadow = $(".btn-shadow");
    // btnShadow.height(_h);
    // btnShadow.width(_w);

    // buttonTimeline.to(
    //     btnShadow,
    //     0.6,
    //     {
    //         "left" : 20,
    //         "top" : 10,
    //         "opacity" : 0,
    //         easing : Linear.easeInOut
    //     }
    // )

}

$(document).ready(landingAnimation)