YUI.add("arraylist-filter",function(e,t){e.mix(e.ArrayList.prototype,{filter:function(t){var n=[];return e.Array.each(this._items,function(e,r){e=this.item(r),t(e)&&n.push(e)},this),new this.constructor(n)}})},"@VERSION@",{requires:["arraylist"]});
