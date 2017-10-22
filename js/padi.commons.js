$.fn.stairUp = function(options){
    var settings = $.extend({
        level:1,
    },options);
    that = $(this);
    for(c=0;c<settings.level;c++){
        that = that.parent();
    }
    return that;
}
$.fn.setComboItems = function(options){
    var settings = $.extend({
        items:[{id:1,name:'PT ABC'},{id:2,name:'PT Maju Sejahtera'}],
    },options);
    that = $(this);
    that.find('option').remove();
    for(c=0;c<settings.items.length;c++){
        str = '<option '+settings.items[c].id+'>';
        str+= settings.items[c].name;
        str+= '</option>';
        that.append(str);
    }
}