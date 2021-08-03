* catches loading failure caused by missing/inaccessible Cairo installation, reloading iNZight in dual-window mode (#309, @tmelliott)
* fix bug in Get Summary/Inference windows preventing font size preferences from being respected
* fix bug introduced by readr 2.0 causing hang when grouping_mark is empty string
* fix bug in Filter data window where cancel button did not work
* fix typo in 'Expand Table' information prompt
* create new `iNZWindow` 'superclass' to make it easier to create consistent pop-up windows (#375, @tmelliott). The following windows now inherit from `iNZWindow`: `iNZFilterWin`, `iNZSortWin`, `iNZAggregateWin`
  * code only displayed when user preference specified (`iNZFilterWin`)
  * renamed `iNZSortbyDataWin` to `iNZSortWin`
* create new `iNZExportWin` to replace broken `iNZSaveWin` (#374, @tmelliott)

