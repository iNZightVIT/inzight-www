
* catches loading failure caused by missing/inaccessible Cairo installation, reloading iNZight in dual-window mode (#309, @tmelliott)
* fix bug in Get Summary/Inference windows preventing font size preferences from being respected
* fix bug in Filter data window where cancel button did not work
* fix typo in 'Expand Table' information prompt
* create new `iNZWindow` 'superclass' to make it easier to create consistent pop-up windows (#375, @tmelliott). The following windows now inherit from `iNZWindow`: `iNZFilterWin`, `iNZSortWin`, `iNZAggregateWin`, `iNZStackWin`, `iNZReorderWin`, `iNZReshapeWin`, `iNZSeparateWin`, `iNZUniteWin`, `iNZJoinWin`, `iNZAppendRowsWin`, `iNZDataReportWin`, `iNZValidateWin`, `iNZRenameDataWin`, `iNZConToCatWin`, `iNZTransformWin`, `iNZStandardiseWin`, `iNZFormClassIntervalsWin`, `iNZRankWin`, `iNZConToCatMultiWin`, `iNZReorderWin`, `iNZRenameFactorLevelsWin`, `iNZCombineWin`, `iNZConToDtWin`, `iNZExtFromDtWin`, `iNZAggDtWin`, `iNZCreateVarWin`, `iNZMissToCatWin`, `iNZDeleteVarWin`
  * code only displayed when user preference specified (`iNZFilterWin`)
  * renamed `iNZSortbyDataWin` to `iNZSortWin`
  * renamed `iNZstackVarWin` to `iNZStackWin`
  * renamed `iNZReorderVarsWin` to `iNZReorderWin`
  * renamed `iNZReshapeDataWin` to `iNZReshapeWin`
  * renamed `iNZSeparateDataWin` to `iNZSeparateWin`
  * renamed `iNZUniteDataWin` to `iNZUniteWin`
  * renamed `iNZjoinDataWin` to `iNZJoinWin`
  * renamed `iNZappendrowWin` to `iNZAppendRowsWin`
  * renamed `iNZrenameDataWin` to `iNZRenameDataWin`
  * renamed `iNZconToCatWin` to `iNZConToCatWin`
  * renamed `iNZtrnsWin` to `iNZTransformWin`
  * renamed `iNZstdVarWin` to `iNZStandardiseWin`
  * renamed `iNZformClassIntervals` to `iNZFormClassIntervalsWin`
  * renamed `iNZrankNumWin` to `iNZRankWin`
  * renamed `iNZctocatmulWin` to `iNZConToCatMultiWin`
  * renamed `iNZreorderWin` to `iNZReorderWin`
  * renamed `iNZcllpsWin` to `iNZCollapseWin`
  * renamed `iNZrenameWin` to `iNZRenameFactorLevelsWin`
  * renamed `iNZcmbCatWin` to `iNZCombineWin`
  * renamed `iNZconTodtWin` to `iNZConToDtWin`
  * renamed `iNZExtfromdtWin` to `iNZExtFromDtWin`
  * renamed `iNZAggregatedtWin` to `iNZAggDtWin`
  * renamed `iNZrnmVarWin` to `iNZRenameVarWin`
  * renamed `iNZcrteVarWin` to `iNZCreateVarWin`
  * renamed `iNZmissCatWin` to `iNZMissToCatWin`
  * renamed `iNZdeleteVarWin` to `iNZDeleteVarWin`
* create new `iNZExportWin` to replace broken `iNZSaveWin` (#374, @tmelliott)
* `iNZexpandTblWin` uses new `update_document()` method
* `iNZTransformWin` redesigned with dropdown to select boxes and buttons to apply transforms - drag-and-drop still works
* `iNZCollapseWin` uses `_` instead of `.` in new variable name
* `iNZRenameFactorLevelsWin` window modified slightly to be a little more intuitive
* `iNZConToDtWin`, `iNZExtFromDtWin`, `iNZAggregatedtWin` redesigned to have previews on the right-hand-side (rather than below)

