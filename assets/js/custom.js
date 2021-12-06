var circle1 = $('.circle-1');
var circle2 = $('.circle-2');
var circle3 = $('.circle-3');
var circle4 = $('.circle-4');
var button = $('.button');

var one_to_four = TweenMax.to(circle1, 2, {
    width: 9,
    height: 9,
    left: 83,
    top: 20,
    repeat: -1,
    bezier: {
        type: "thru",
        values: [{ x: 10, y: 30 }, { x: 13, y: 20 },
        { x: 15, y: 10 }, { x: 11, y: 10 },
        { x: 04, y: 05 }, { x: 02, y: 00 }]
    },
})

var two_to_one = TweenMax.to(circle2, 2, {
    width: 37,
    height: 37,
    left: 25,
    top: 40,
    repeat: -1,
});

var three_to_two = TweenMax.to(circle3, 2, {
    width: 21,
    height: 21,
    left: 52,
    top: 20,
    repeat: -1,
});

var four_to_three = TweenMax.to(circle4, 2, {
    width: 13,
    height: 13,
    left: 70,
    top: 15,
    repeat: -1,
});

// var testAnimation = TweenMax.to(circle1, 2, {
//   width: 100,
//   ease: Power1.easeInOut,
//   delay: 1,
// })