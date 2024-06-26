; (function ($, window, document, undefined) {
    'use strict';
    var margetable = function ($eles, opt) {
        this.opt = opt;
        this.defaults = {
            type: 1,
            colindex: [{
                index: 0,
                dependent: [0]
            }]
        };

        this.options = $.extend({}, this.defaults, this.opt);
        var me = this;

        return $eles.each(function () {
            var $this = $(this);
            var colIndexs = me.options.colindex;
            if (me.options.type == "1") {
                for (var i = 0; i < colIndexs.length; i++) {
                    margetColumn($this, colIndexs[i]);
                }
            }
            else if (me.options.type == "2") {
                margetColumn2($this, me.options);
            }
        });
    };

    var margetColumn = function ($ele, option) {
        var me = this;
        var $trs = $ele.find('tbody tr');
        var preRecord = {
            index: 0,
            rowspan: 1,
            text: new Object()
        };
        var curText = new Object();
        var isSame = true;
        for (var i = 0; i < $trs.length; i++) {
            if (i == 0) {
                preRecord.index = i;
                preRecord.text = setPreRecord($trs.eq(i), option);
            }
            else {
                isSame = true;
                if (option.index > 0 && option.dependent && option.dependent.length > 0) {
                    for (var deIndex = 0; deIndex < option.dependent.length; deIndex++) {
                        if (preRecord.text['col' + option.dependent[deIndex]] != $trs.eq(i).find('td').eq(option.dependent[deIndex]).text()) {
                            isSame = false;
                        }
                    }
                }
                if (isSame == false || preRecord.text['col' + option.index] != $trs.eq(i).find('td').eq(option.index).text()) {
                    $trs.eq(preRecord.index).find('td').eq(option.index).attr('rowspan', preRecord.rowspan);
                    preRecord.index = i;
                    preRecord.rowspan = 1;
                    preRecord.text = setPreRecord($trs.eq(i), option);
                }
                else {
                    preRecord.rowspan++;
                    $trs.eq(i).find('td').eq(option.index).hide();
                }
            }
        }
        $trs.eq(preRecord.index).find('td').eq(option.index).attr('rowspan', preRecord.rowspan);
    };

    var margetColumn2 = function ($ele, option) {
        var me = this;
        var $trs = $ele.find('tbody tr');
        var preRecord = [];
        var curText = "";
        for (var i = 0; i < $trs.length; i++) {
            var $tr = $trs.eq(i);
            if (i == 0) {
                for (var j = 0; j < option.colindex.length; j++) {
                    preRecord.push({
                        index: i,
                        rowspan: 1,
                        text: $tr.find('td').eq(option.colindex[j]).text()
                    });
                }
            }
            else {
                for (var j = 0; j < option.colindex.length; j++) {
                    var curText = $tr.find('td').eq(option.colindex[j]).text();
                    if (preRecord[j].text != curText) {
                        $trs.eq(preRecord[j].index).find('td').eq(option.colindex[j]).attr('rowspan', preRecord[j].rowspan);
                        preRecord[j].index = i;
                        preRecord[j].rowspan = 1;
                        preRecord[j].text = curText;
                        for (var m = j + 1; m < option.colindex.length; m++) {
                            $trs.eq(preRecord[m].index).find('td').eq(option.colindex[m]).attr('rowspan', preRecord[m].rowspan);
                            preRecord[m].index = i;
                            preRecord[m].rowspan = 1;
                            preRecord[m].text = $tr.find('td').eq(option.colindex[m]).text();
                        }
                        break;
                    }
                    else {
                        $tr.find('td').eq(option.colindex[j]).hide();
                        preRecord[j].rowspan++;
                    }
                }
            }
        }
        for (var m = 0; m < option.colindex.length; m++) {
            $trs.eq(preRecord[m].index).find('td').eq(option.colindex[m]).attr('rowspan', preRecord[m].rowspan);
        }
    };

    var setPreRecord = function ($tr, option) {
        var textinfo = new Object();
        textinfo['col' + option.index] = $tr.find('td').eq(option.index).text();
        if (option.index > 0 && option.dependent && option.dependent.length > 0) {
            for (var i = 0; i < option.dependent.length; i++) {
                textinfo['col' + option.dependent[i]] = $tr.find('td').eq(option.dependent[i]).text();
            }
        }
        return textinfo;
    }

    $.fn.margetable = function (options) {
        new margetable(this, options);
    }
})(jQuery, window, document);
