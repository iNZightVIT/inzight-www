
* catches loading failure caused by missing/inaccessible Cairo installation, reloading iNZight in dual-window mode (#309, @tmelliott)
* fix bug in Get Summary/Inference windows preventing font size preferences from being respected
* fix bug in Filter data window where cancel button did not work
* fix typo in 'Expand Table' information prompt
* create new `iNZWindow` 'superclass' to make it easier to create consistent pop-up windows (#375, @tmelliott). The following windows now inherit from `iNZWindow`: `iNZFilterWin`, `iNZSortWin`, `iNZAggregateWin`, `iNZStackWin`, `iNZReorderWin`, `iNZReshapeWin`, `iNZSeparateWin`, `iNZUniteWin`, `iNZJoinWin`, `iNZAppendRowsWin`, `iNZDataReportWin`, `iNZValidateWin`
  * code only displayed when user preference specified (`iNZFilterWin`)
  * renamed `iNZSortbyDataWin` to `iNZSortWin`
  * renamed `iNZstackVarWin` to `iNZStackWin`
  * renamed `iNZReorderVarsWin` to `iNZReorderWin`
  * renamed `iNZReshapeDataWin` to `iNZReshapeWin`
  * renamed `iNZSeparateDataWin` to `iNZSeparateWin`
  * renamed `iNZUniteDataWin` to `iNZUniteWin`
  * renamed `iNZjoinDataWin` to `iNZJoinWin`
  * renamed `iNZappendrowWin` to `iNZAppendRowsWin`
* create new `iNZExportWin` to replace broken `iNZSaveWin` (#374, @tmelliott)
* `iNZexpandTblWin` uses new `update_document()` method

