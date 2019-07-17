define([], function() {
	return {
		defaultoptions: {
			callback: null,
			type: "image",
			isWechat: !1,
			multiple: !1,
			showType: 3,
			needType: 3,
			global: !1,
			dest_dir: "",
			otherVal: "",
			others: {},
			uniacid: -1,
			netWorkVideo: !1
		},
		init: function(o, e) {
			var i = this;
			i.options = $.extend({}, i.defaultoptions, e), "audio" == i.options.type && (i.options.type = "voice"), i.options.callback = o, $("#material-Modal").remove();
			var l = i.options.type,
				t = i.buildHtml(l);
			return $(document.body).prepend(t), i.modalobj = $("#material-Modal"), i.registerSelected(), angular.module("we7resource").value("config", i.options), angular.bootstrap(i.modalobj, ["we7resource"]), i.modalobj.modal("show"), i.modalobj
		},
		show: function(o, e) {
			this.init(o, e)
		},
		registerSelected: function() {
			var o = this;
			$(window).unbind("resource_selected").on("resource_selected", function(e, i) {
				o.finish(i.items)
			})
		},
		finish: function(o) {
			var e = this;
			$.isFunction(e.options.callback) && (0 == e.options.multiple ? e.options.callback(o[0]) : e.options.callback(o), e.modalobj.modal("hide"))
		},
		buildHtml: function(o) {
			var e = "we7-resource-" + o + "-dialog",
				i = o;
			return "icon" == o && (i = "module"), "<div " + e + ' class="uploader-modal modal fade ' + i + '" id="material-Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"></div>'
		}
	}
});