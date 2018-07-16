define(['uiRegistry','uiElement'], function(registry,Element) {

    test ={
        defaults: {},
        initialize: function () {

        },
        testSingle: function (arg) {
            alert("Test Single: " + arg);
        }
    };

    registry.set('ochnygoschorg_test',test);
    return test;
});