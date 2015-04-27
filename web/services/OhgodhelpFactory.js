thinger.factory('OhgodhelpFactory', function() {
    var factory = {};

    factory.stuvv = [
        {name: "whoa", type: "jerk"},
        {name: "flerm", type: "budget"},
        {name: "gurge", type: "jerk"},
        {name: "yonk", type: "budget"},
        {name: "qwerty", type: "jerk"},
        {name: "hamper", type: "budget"},
        {name: "dwindler", type: "budget"},
        {name: "frambert", type: "jerk"}
    ];

    factory.switchType = function($item) {
        if ($item.type === "jerk") {
            $item.type = "budget";
        } else {
            $item.type = "jerk";
        }
    };

    return factory;
});
