/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {

    "use strict";
    var im='images/',
        aud='media/',
        vid='media/',
        js='js/',
        fonts = {
        },
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [
        ],
        scripts = [
        ],
        symbols = {
            "stage": {
                version: "5.0.1",
                minimumCompatibleVersion: "5.0.0",
                build: "5.0.1.386",
                scaleToFit: "none",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            id: 'iNZight2',
                            type: 'image',
                            rect: ['0px', '0px', '886px', '638px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"iNZight2.PNG",'0px','0px']
                        },
                        {
                            id: 'HelpMenu',
                            type: 'rect',
                            rect: ['260px', '32px', '39px', '20px', 'auto', 'auto'],
                            opacity: '1',
                            fill: ["rgba(255,255,255,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'AdvancedMenu',
                            type: 'rect',
                            rect: ['195px', '32px', '65px', '20px', 'auto', 'auto'],
                            cursor: 'pointer',
                            opacity: '1',
                            fill: ["rgba(255,255,255,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'ManipVars',
                            type: 'rect',
                            rect: ['95px', '32px', '62px', '20px', 'auto', 'auto'],
                            cursor: 'pointer',
                            opacity: '1',
                            fill: ["rgba(255,255,255,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'RowOperations',
                            type: 'rect',
                            rect: ['45px', '32px', '50px', '20px', 'auto', 'auto'],
                            cursor: 'pointer',
                            opacity: '1',
                            fill: ["rgba(0,0,0,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'FileMenu',
                            type: 'rect',
                            rect: ['10px', '32px', '35px', '20px', 'auto', 'auto'],
                            opacity: '1',
                            fill: ["rgba(0,0,0,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'PlotToolbar',
                            type: 'rect',
                            rect: ['339px', '579px', '538px', '51px', 'auto', 'auto'],
                            cursor: 'pointer',
                            borderRadius: ["0px", "0px", "0px", "0px 0px"],
                            opacity: '1',
                            fill: ["rgba(192,192,192,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'ViewChanger',
                            type: 'rect',
                            rect: ['128px', '52px', '211px', '34px', 'auto', 'auto'],
                            opacity: '1',
                            fill: ["rgba(0,0,0,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'DataName',
                            type: 'rect',
                            rect: ['10px', '86px', '329px', '17px', 'auto', 'auto'],
                            opacity: '1',
                            fill: ["rgba(0,0,0,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'DataViewer',
                            type: 'rect',
                            rect: ['10px', '107px', '329px', '287px', 'auto', 'auto'],
                            opacity: '1',
                            fill: ["rgba(0,0,0,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'DropTargets',
                            type: 'rect',
                            rect: ['10px', '418px', '329px', '183px', 'auto', 'auto'],
                            cursor: 'pointer',
                            opacity: '1',
                            fill: ["rgba(0,0,0,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'SummaryButtons',
                            type: 'rect',
                            rect: ['10px', '601px', '329px', '29px', 'auto', 'auto'],
                            opacity: '1',
                            fill: ["rgba(0,0,0,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'FileMenuText',
                            type: 'text',
                            rect: ['369px', '113px', 'auto', 'auto', 'auto', 'auto'],
                            text: "File Menu",
                            align: "center",
                            font: ['Arial, Helvetica, sans-serif', [22, "px"], "rgba(0,0,0,0.00)", "700", "none solid rgba(255, 255, 255, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'FileMenuText2',
                            type: 'text',
                            rect: ['369', '187', 'auto', 'auto', 'auto', 'auto'],
                            opacity: '0',
                            text: "IMPORT and EXPORT data sets<br><br>Manage iNZight Preferences<br><br>Return to Home and Exit iNZight",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [16, "px"], "rgba(0,0,0,1.00)", "400", "none solid rgba(0, 0, 0, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'RowOpText',
                            type: 'text',
                            rect: ['369px', '113px', 'auto', 'auto', 'auto', 'auto'],
                            text: "Dataset Menu",
                            align: "center",
                            font: ['Arial, Helvetica, sans-serif', [22, "px"], "rgba(0,0,0,0.00)", "700", "none solid rgba(255, 255, 255, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'RowOpText2',
                            type: 'text',
                            rect: ['369', '187', 'auto', 'auto', 'auto', 'auto'],
                            opacity: '0',
                            text: "This menu provides users with several tools for manipulating <br>the data set.<br><br>Click the button for more detailed information.",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [16, "px"], "rgba(0,0,0,1.00)", "400", "none solid rgba(0, 0, 0, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'ManipVarsText',
                            type: 'text',
                            rect: ['369px', '113px', 'auto', 'auto', 'auto', 'auto'],
                            text: "Variables Menu",
                            align: "center",
                            font: ['Arial, Helvetica, sans-serif', [22, "px"], "rgba(0,0,0,0.00)", "700", "none solid rgba(255, 255, 255, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'ManipVarsText2',
                            type: 'text',
                            rect: ['369', '187', 'auto', 'auto', 'auto', 'auto'],
                            opacity: '0',
                            text: "This menu provides users with several tools for manipulating individual <br>variables in the data set (columns in the table view).<br><br>Click the button for more detailed information.",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [16, "px"], "rgba(0,0,0,1.00)", "400", "none solid rgba(0, 0, 0, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'AdvText',
                            type: 'text',
                            rect: ['369px', '113px', 'auto', 'auto', 'auto', 'auto'],
                            text: "Advanced Menu",
                            align: "center",
                            font: ['Arial, Helvetica, sans-serif', [22, "px"], "rgba(0,0,0,0.00)", "700", "none solid rgba(255, 255, 255, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'AdvText2',
                            type: 'text',
                            rect: ['369', '187', 'auto', 'auto', 'auto', 'auto'],
                            opacity: '0',
                            text: "This menu houses several additional modules to help users<br>investigate data of varying types.<br><br>Click the button to get more detailed information.",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [16, "px"], "rgba(0,0,0,1.00)", "400", "none solid rgba(0, 0, 0, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'HelpMenuText',
                            type: 'text',
                            rect: ['369px', '113px', 'auto', 'auto', 'auto', 'auto'],
                            text: "Help Menu",
                            align: "center",
                            font: ['Arial, Helvetica, sans-serif', [22, "px"], "rgba(0,0,0,0.00)", "700", "none solid rgba(255, 255, 255, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'HelpMenuText2',
                            type: 'text',
                            rect: ['369', '187', 'auto', 'auto', 'auto', 'auto'],
                            opacity: '0',
                            text: "Provides some additional information about iNZight<br><br>\"About\" opens up some basic information about the iNZight version<br><br>\"User Guides\" provides quick links to the user guides found on our <br>website<br><br>\"FAQ\" will take you to the FAQ page on our website<br><br>\"Contact\" will take you to the contact form on our website",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [16, "px"], "rgba(0,0,0,1.00)", "400", "none solid rgba(0, 0, 0, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'PlotToolbarText',
                            type: 'text',
                            rect: ['369px', '113px', 'auto', 'auto', 'auto', 'auto'],
                            text: "Plot Toolbar",
                            align: "center",
                            font: ['Arial, Helvetica, sans-serif', [22, "px"], "rgba(0,0,0,0.00)", "700", "none solid rgba(255, 255, 255, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'PlotToolbarText2',
                            type: 'text',
                            rect: ['369', '187', 'auto', 'auto', 'auto', 'auto'],
                            opacity: '0',
                            text: "This toolbar provides several useful actions for working with <br>the plotting device (new, pop-out, refresh), and also for<br>adding features to the plot.<br><br>Click the Plot Toolbar for more detailed information.",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [16, "px"], "rgba(0,0,0,1.00)", "400", "none solid rgba(0, 0, 0, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'ViewChText',
                            type: 'text',
                            rect: ['369px', '113px', 'auto', 'auto', 'auto', 'auto'],
                            text: "Data View and Variable View",
                            align: "center",
                            font: ['Arial, Helvetica, sans-serif', [22, "px"], "rgba(0,0,0,0.00)", "700", "none solid rgba(255, 255, 255, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'ViewChText2',
                            type: 'text',
                            rect: ['369', '187', 'auto', 'auto', 'auto', 'auto'],
                            opacity: '0',
                            text: "These buttons allow you to switch between the spreadsheet-style<br>view of the data (variables in columns, observations in rows) <br>and the variable view (just the names of the variables in<br>the data set).<br><br>If the data set is over a certain size, only the variable view is <br>available.",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [16, "px"], "rgba(0,0,0,1.00)", "400", "none solid rgba(0, 0, 0, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'DataNameText',
                            type: 'text',
                            rect: ['369px', '113px', 'auto', 'auto', 'auto', 'auto'],
                            text: "Data Set Name",
                            align: "center",
                            font: ['Arial, Helvetica, sans-serif', [22, "px"], "rgba(0,0,0,0.00)", "700", "none solid rgba(255, 255, 255, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'DataNameText2',
                            type: 'text',
                            rect: ['369', '187', 'auto', 'auto', 'auto', 'auto'],
                            opacity: '0',
                            text: "The name of the data set will be displayed here.<br><br>This is simply taken from the name of the file you load from <br>the \"File &gt; Import Data\" menu.",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [16, "px"], "rgba(0,0,0,1.00)", "400", "none solid rgba(0, 0, 0, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'DataViewerText',
                            type: 'text',
                            rect: ['369px', '113px', 'auto', 'auto', 'auto', 'auto'],
                            text: "Data View Panel",
                            align: "center",
                            font: ['Arial, Helvetica, sans-serif', [22, "px"], "rgba(0,0,0,0.00)", "700", "none solid rgba(255, 255, 255, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'DataViewerText2',
                            type: 'text',
                            rect: ['369', '187', 'auto', 'auto', 'auto', 'auto'],
                            opacity: '0',
                            text: "This is where the data are displayed, either in <br>spreadsheet form (\"View Data Set\"), or else simply<br>a list of the variable names (\"View Variables\").<br><br>Values can me modified from the spreadsheet view by clicking the cell.",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [16, "px"], "rgba(0,0,0,1.00)", "400", "none solid rgba(0, 0, 0, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'DropTargetText',
                            type: 'text',
                            rect: ['369px', '113px', 'auto', 'auto', 'auto', 'auto'],
                            text: "Drag-and-drop Variable Names Here",
                            align: "center",
                            font: ['Arial, Helvetica, sans-serif', [22, "px"], "rgba(0,0,0,0.00)", "700", "none solid rgba(255, 255, 255, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'DropTargetText2',
                            type: 'text',
                            rect: ['369', '187', 'auto', 'auto', 'auto', 'auto'],
                            opacity: '0',
                            text: "This is where the magic happens!<br><br>Drag variables names from above and drop them in the slots.<br>iNZight automatically detects the type of variable and draws<br>the appropriate plot!<br><br>Variable 1 is considered the \"primary variable of interest\".<br>That is, it is the 'response' or 'outcome' variable in a scatter plot.<br><br>Variable 2 is considered the \"secondary variable\", and is used<br>to investigate variable 1.<br>It is the 'explanatory' or 'predictor' variable in a scatter plot.<br><br>The two subset by slots allow you to easy explore the distribution <br>of the data for various levels of the variable(s).<br><br>Click the area to go to the user guides section \"The Basics\", <br>which covers this area in more detail.",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [16, "px"], "rgba(0,0,0,1.00)", "400", "none solid rgba(0, 0, 0, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'SummaryText',
                            type: 'text',
                            rect: ['369px', '113px', 'auto', 'auto', 'auto', 'auto'],
                            text: "Get Summary and Get Inference Buttons",
                            align: "center",
                            font: ['Arial, Helvetica, sans-serif', [22, "px"], "rgba(0,0,0,0.00)", "700", "none solid rgba(255, 255, 255, 0)", "normal", "break-word", "nowrap"]
                        },
                        {
                            id: 'SummaryText2',
                            type: 'text',
                            rect: ['369', '187', 'auto', 'auto', 'auto', 'auto'],
                            opacity: '0',
                            text: "These buttons allow you to quickly obtain numerical information<br>relating to the currently displayed plot.<br><br>The \"Get Summary\" button provides some simple summary<br>statistics for the given plot.<br><br>The \"Get Inference\" button will perform some inference methods<br>(normal and bootstrap) to generate intervals and variance information.",
                            align: "left",
                            font: ['Arial, Helvetica, sans-serif', [16, "px"], "rgba(0,0,0,1.00)", "400", "none solid rgba(0, 0, 0, 0)", "normal", "break-word", "nowrap"]
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '886px', '638px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,1)"]
                        }
                    }
                },
                timeline: {
                    duration: 11250,
                    autoPlay: false,
                    labels: {
                        "FileMenuText": 1000,
                        "HelpMenuText": 2000,
                        "RowOpText": 3000,
                        "ManipVarsText": 4000,
                        "AdvText": 5000,
                        "PlotToolbarText": 6000,
                        "ViewChText": 7000,
                        "DataNameText": 8000,
                        "DataViewerText": 9000,
                        "DropTargetText": 10000,
                        "SummaryText": 11000
                    },
                    data: [
                        [
                            "eid74",
                            "color",
                            1750,
                            250,
                            "linear",
                            "${HelpMenuText}",
                            'rgba(0,0,0,0.00)',
                            'rgba(0,0,0,1)'
                        ],
                        [
                            "eid75",
                            "color",
                            2000,
                            250,
                            "linear",
                            "${HelpMenuText}",
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,0.00)'
                        ],
                        [
                            "eid72",
                            "opacity",
                            1750,
                            250,
                            "linear",
                            "${HelpMenuText2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid73",
                            "opacity",
                            2000,
                            250,
                            "linear",
                            "${HelpMenuText2}",
                            '1',
                            '0'
                        ],
                        [
                            "eid128",
                            "opacity",
                            10750,
                            250,
                            "linear",
                            "${SummaryText2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid129",
                            "opacity",
                            11000,
                            250,
                            "linear",
                            "${SummaryText2}",
                            '1',
                            '0'
                        ],
                        [
                            "eid82",
                            "color",
                            3750,
                            250,
                            "linear",
                            "${ManipVarsText}",
                            'rgba(0,0,0,0.00)',
                            'rgba(0,0,0,1)'
                        ],
                        [
                            "eid83",
                            "color",
                            4000,
                            250,
                            "linear",
                            "${ManipVarsText}",
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,0.00)'
                        ],
                        [
                            "eid88",
                            "opacity",
                            5750,
                            250,
                            "linear",
                            "${PlotToolbarText2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid89",
                            "opacity",
                            6000,
                            250,
                            "linear",
                            "${PlotToolbarText2}",
                            '1',
                            '0'
                        ],
                        [
                            "eid102",
                            "color",
                            8750,
                            250,
                            "linear",
                            "${DataViewerText}",
                            'rgba(0,0,0,0.00)',
                            'rgba(0,0,0,1)'
                        ],
                        [
                            "eid103",
                            "color",
                            9000,
                            250,
                            "linear",
                            "${DataViewerText}",
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,0.00)'
                        ],
                        [
                            "eid67",
                            "color",
                            750,
                            250,
                            "linear",
                            "${FileMenuText}",
                            'rgba(0,0,0,0.00)',
                            'rgba(0,0,0,1)'
                        ],
                        [
                            "eid68",
                            "color",
                            1000,
                            250,
                            "linear",
                            "${FileMenuText}",
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,0.00)'
                        ],
                        [
                            "eid76",
                            "opacity",
                            2750,
                            250,
                            "linear",
                            "${RowOpText2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid77",
                            "opacity",
                            3000,
                            250,
                            "linear",
                            "${RowOpText2}",
                            '1',
                            '0'
                        ],
                        [
                            "eid96",
                            "opacity",
                            7750,
                            250,
                            "linear",
                            "${DataNameText2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid97",
                            "opacity",
                            8000,
                            250,
                            "linear",
                            "${DataNameText2}",
                            '1',
                            '0'
                        ],
                        [
                            "eid106",
                            "color",
                            9750,
                            250,
                            "linear",
                            "${DropTargetText}",
                            'rgba(0,0,0,0.00)',
                            'rgba(0,0,0,1)'
                        ],
                        [
                            "eid107",
                            "color",
                            10000,
                            250,
                            "linear",
                            "${DropTargetText}",
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,0.00)'
                        ],
                        [
                            "eid94",
                            "color",
                            6750,
                            250,
                            "linear",
                            "${ViewChText}",
                            'rgba(0,0,0,0.00)',
                            'rgba(0,0,0,1)'
                        ],
                        [
                            "eid95",
                            "color",
                            7000,
                            250,
                            "linear",
                            "${ViewChText}",
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,0.00)'
                        ],
                        [
                            "eid98",
                            "color",
                            7750,
                            250,
                            "linear",
                            "${DataNameText}",
                            'rgba(0,0,0,0.00)',
                            'rgba(0,0,0,1)'
                        ],
                        [
                            "eid99",
                            "color",
                            8000,
                            250,
                            "linear",
                            "${DataNameText}",
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,0.00)'
                        ],
                        [
                            "eid130",
                            "color",
                            10750,
                            250,
                            "linear",
                            "${SummaryText}",
                            'rgba(0,0,0,0.00)',
                            'rgba(0,0,0,1)'
                        ],
                        [
                            "eid131",
                            "color",
                            11000,
                            250,
                            "linear",
                            "${SummaryText}",
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,0.00)'
                        ],
                        [
                            "eid84",
                            "opacity",
                            4750,
                            250,
                            "linear",
                            "${AdvText2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid85",
                            "opacity",
                            5000,
                            250,
                            "linear",
                            "${AdvText2}",
                            '1',
                            '0'
                        ],
                        [
                            "eid70",
                            "opacity",
                            750,
                            250,
                            "linear",
                            "${FileMenuText2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid71",
                            "opacity",
                            1000,
                            250,
                            "linear",
                            "${FileMenuText2}",
                            '1',
                            '0'
                        ],
                        [
                            "eid80",
                            "opacity",
                            3750,
                            250,
                            "linear",
                            "${ManipVarsText2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid81",
                            "opacity",
                            4000,
                            250,
                            "linear",
                            "${ManipVarsText2}",
                            '1',
                            '0'
                        ],
                        [
                            "eid100",
                            "opacity",
                            8750,
                            250,
                            "linear",
                            "${DataViewerText2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid101",
                            "opacity",
                            9000,
                            250,
                            "linear",
                            "${DataViewerText2}",
                            '1',
                            '0'
                        ],
                        [
                            "eid78",
                            "color",
                            2750,
                            250,
                            "linear",
                            "${RowOpText}",
                            'rgba(0,0,0,0.00)',
                            'rgba(0,0,0,1)'
                        ],
                        [
                            "eid79",
                            "color",
                            3000,
                            250,
                            "linear",
                            "${RowOpText}",
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,0.00)'
                        ],
                        [
                            "eid92",
                            "opacity",
                            6750,
                            250,
                            "linear",
                            "${ViewChText2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid93",
                            "opacity",
                            7000,
                            250,
                            "linear",
                            "${ViewChText2}",
                            '1',
                            '0'
                        ],
                        [
                            "eid86",
                            "color",
                            4750,
                            250,
                            "linear",
                            "${AdvText}",
                            'rgba(0,0,0,0.00)',
                            'rgba(0,0,0,1)'
                        ],
                        [
                            "eid87",
                            "color",
                            5000,
                            250,
                            "linear",
                            "${AdvText}",
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,0.00)'
                        ],
                        [
                            "eid90",
                            "color",
                            5750,
                            250,
                            "linear",
                            "${PlotToolbarText}",
                            'rgba(0,0,0,0.00)',
                            'rgba(0,0,0,1)'
                        ],
                        [
                            "eid91",
                            "color",
                            6000,
                            250,
                            "linear",
                            "${PlotToolbarText}",
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,0.00)'
                        ],
                        [
                            "eid126",
                            "opacity",
                            9750,
                            250,
                            "linear",
                            "${DropTargetText2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid127",
                            "opacity",
                            10000,
                            250,
                            "linear",
                            "${DropTargetText2}",
                            '1',
                            '0'
                        ]
                    ]
                }
            },
            "ContentBox": {
                version: "5.0.1",
                minimumCompatibleVersion: "5.0.0",
                build: "5.0.1.386",
                scaleToFit: "none",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            rect: ['0px', '0px', '520px', '485px', 'auto', 'auto'],
                            id: 'ContentBox',
                            stroke: [0, 'rgb(0, 0, 0)', 'none'],
                            type: 'rect',
                            fill: ['rgba(0,0,0,0)']
                        }
                    ],
                    style: {
                        '${symbolSelector}': {
                            isStage: 'true',
                            rect: [undefined, undefined, '520px', '485px']
                        }
                    }
                },
                timeline: {
                    duration: 0,
                    autoPlay: true,
                    data: [

                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load("interface_edgeActions.js");
})("EDGE-7984144");
