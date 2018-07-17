define(['uiRegistry','uiElement'], function(registry,Element) {

    test ={
        defaults: {},
        initialize: function () {

        },
        testSingle: function (arg) {
            alert("Test Single: " + arg);
            console.log(arg);
        },
        testSingleArray: function (arg) {
            alert("Test Single Array: " + arg);
            console.log(arg);
        },
        testMultiple: function (arg1, arg2) {
            alert("Test Multiple: " + arg1 + " - " + arg2);
            console.log(arg1);
            console.log(arg2);
        }
    };

    registry.set('ochnygoschorg_magento2columnactiontest',test);
    return test;
});