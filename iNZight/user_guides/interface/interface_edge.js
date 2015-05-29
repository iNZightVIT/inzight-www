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
                            id: 'PlotToolbar',
                            type: 'rect',
                            rect: ['341px', '585px', '535px', '43px', 'auto', 'auto'],
                            cursor: 'pointer',
                            borderRadius: ["0px", "0px", "0px", "0px 0px"],
                            opacity: '1',
                            fill: ["rgba(192,192,192,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"],
                            c: [
                            {
                                id: 'Text3',
                                type: 'text',
                                rect: ['200px', '7px', 'auto', 'auto', 'auto', 'auto'],
                                overflow: 'visible',
                                opacity: '0',
                                text: "Plot Toolbar",
                                align: "center",
                                font: ['Arial, Helvetica, sans-serif', [25, "px"], "rgba(255,255,255,0.00)", "400", "none solid rgb(0, 0, 0)", "normal", "break-word", "nowrap"],
                                filter: [0, 0, 1, 1, 0, 0, 0, 0, "rgba(0,0,0,0)", 0, 0, 0]
                            }]
                        },
                        {
                            id: 'ManipVars',
                            type: 'rect',
                            rect: ['143px', '34px', '122px', '18px', 'auto', 'auto'],
                            cursor: 'pointer',
                            opacity: '1',
                            fill: ["rgba(255,255,255,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'RowOperations',
                            type: 'rect',
                            rect: ['45px', '34px', '97px', '18px', 'auto', 'auto'],
                            cursor: 'pointer',
                            opacity: '1',
                            fill: ["rgba(0,0,0,0.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: [undefined, undefined, '886px', '638px'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,1)"]
                        }
                    }
                },
                timeline: {
                    duration: 1000,
                    autoPlay: false,
                    labels: {
                        "PlotToolbarStart": 0,
                        "PlotToolbarShow": 500,
                        "PlotToolbarStop": 1000
                    },
                    data: [
                        [
                            "eid31",
                            "border-top-left-radius",
                            0,
                            0,
                            "linear",
                            "${PlotToolbar}",
                            [0,0],
                            [0,0],
                            {valueTemplate: '@@0@@px @@1@@px'}
                        ],
                        [
                            "eid52",
                            "border-top-left-radius",
                            500,
                            0,
                            "linear",
                            "${PlotToolbar}",
                            [0,0],
                            [0,0],
                            {valueTemplate: '@@0@@px @@1@@px'}
                        ],
                        [
                            "eid51",
                            "border-top-left-radius",
                            1000,
                            0,
                            "linear",
                            "${PlotToolbar}",
                            [0,0],
                            [0,0],
                            {valueTemplate: '@@0@@px @@1@@px'}
                        ],
                        [
                            "eid33",
                            "border-top-right-radius",
                            0,
                            0,
                            "linear",
                            "${PlotToolbar}",
                            [0,0],
                            [0,0],
                            {valueTemplate: '@@0@@px @@1@@px'}
                        ],
                        [
                            "eid56",
                            "border-top-right-radius",
                            500,
                            0,
                            "linear",
                            "${PlotToolbar}",
                            [0,0],
                            [0,0],
                            {valueTemplate: '@@0@@px @@1@@px'}
                        ],
                        [
                            "eid55",
                            "border-top-right-radius",
                            1000,
                            0,
                            "linear",
                            "${PlotToolbar}",
                            [0,0],
                            [0,0],
                            {valueTemplate: '@@0@@px @@1@@px'}
                        ],
                        [
                            "eid4",
                            "opacity",
                            0,
                            500,
                            "linear",
                            "${Text3}",
                            '0',
                            '1'
                        ],
                        [
                            "eid5",
                            "opacity",
                            500,
                            500,
                            "linear",
                            "${Text3}",
                            '1',
                            '0'
                        ],
                        [
                            "eid24",
                            "background-color",
                            0,
                            500,
                            "linear",
                            "${PlotToolbar}",
                            'rgba(192,192,192,0)',
                            'rgba(0,0,0,0.72)'
                        ],
                        [
                            "eid50",
                            "background-color",
                            500,
                            500,
                            "linear",
                            "${PlotToolbar}",
                            'rgba(0,0,0,0.72)',
                            'rgba(192,192,192,0)'
                        ],
                        [
                            "eid37",
                            "color",
                            0,
                            500,
                            "linear",
                            "${Text3}",
                            'rgba(255,255,255,0.00)',
                            'rgba(255,255,255,1.00)'
                        ],
                        [
                            "eid40",
                            "color",
                            500,
                            500,
                            "linear",
                            "${Text3}",
                            'rgba(255,255,255,1.00)',
                            'rgba(255,255,255,0.00)'
                        ],
                        [
                            "eid35",
                            "border-bottom-right-radius",
                            0,
                            0,
                            "linear",
                            "${PlotToolbar}",
                            [0,0],
                            [0,0],
                            {valueTemplate: '@@0@@px @@1@@px'}
                        ],
                        [
                            "eid54",
                            "border-bottom-right-radius",
                            500,
                            0,
                            "linear",
                            "${PlotToolbar}",
                            [0,0],
                            [0,0],
                            {valueTemplate: '@@0@@px @@1@@px'}
                        ],
                        [
                            "eid53",
                            "border-bottom-right-radius",
                            1000,
                            0,
                            "linear",
                            "${PlotToolbar}",
                            [0,0],
                            [0,0],
                            {valueTemplate: '@@0@@px @@1@@px'}
                        ],
                        [
                            "eid29",
                            "border-bottom-left-radius",
                            0,
                            0,
                            "linear",
                            "${PlotToolbar}",
                            [0,0],
                            [0,0],
                            {valueTemplate: '@@0@@px @@1@@px'}
                        ],
                        [
                            "eid58",
                            "border-bottom-left-radius",
                            500,
                            0,
                            "linear",
                            "${PlotToolbar}",
                            [0,0],
                            [0,0],
                            {valueTemplate: '@@0@@px @@1@@px'}
                        ],
                        [
                            "eid57",
                            "border-bottom-left-radius",
                            1000,
                            0,
                            "linear",
                            "${PlotToolbar}",
                            [0,0],
                            [0,0],
                            {valueTemplate: '@@0@@px @@1@@px'}
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load("interface_edgeActions.js");
})("EDGE-7984144");
