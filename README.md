# scRNA-seq_cell_population_ident_cellassign
This is one of the modules for 10X scRNA-seq data analysis pipeline - cell population identification using `cellassign`.

### Resource:
* cellassign (github):
https://github.com/Irrationone/cellassign

* publication:
https://www.nature.com/articles/s41592-019-0529-1

### Input
* biomarker file
* raw expression count matrix

### Demo data:
* marker.txt - biomarker file
* P23H-Gene-editing_expr_raw_QC.csv.zip - raw expression count matrix

Please follow the format of "marker.txt" to generate the marker file 

### Usage(on titan): 
```r
source activate my_python_3_7

Rscript cellassign_v1.R marker.txt P23H-Gene-editing_expr_raw_QC.csv
```

### Outputs:
* heatmap for provided biomarker
* table of identified cell population (column1: barcode column2: cell population). It can be uploaded to Loupe Cell Browser for visulization. 

```r
> sessionInfo()
R version 3.6.2 (2019-12-12)
Platform: x86_64-conda_cos6-linux-gnu (64-bit)
Running under: Ubuntu 18.04.2 LTS

>Matrix products: default
BLAS/LAPACK: /home/genomics/anaconda2/envs/my_pythong_3_7/lib/libopenblasp-r0.3.7.so

>locale:
 [1] LC_CTYPE=en_US.UTF-8       LC_NUMERIC=C
 [3] LC_TIME=en_US.UTF-8        LC_COLLATE=en_US.UTF-8
 [5] LC_MONETARY=en_US.UTF-8    LC_MESSAGES=en_US.UTF-8
 [7] LC_PAPER=en_US.UTF-8       LC_NAME=C
 [9] LC_ADDRESS=C               LC_TELEPHONE=C
[11] LC_MEASUREMENT=en_US.UTF-8 LC_IDENTIFICATION=C

>attached base packages:
[1] parallel  stats4    stats     graphics  grDevices utils     datasets
[8] methods   base

>other attached packages:
 [1] pheatmap_1.0.12             scran_1.12.1
 [3] SingleCellExperiment_1.6.0  SummarizedExperiment_1.14.1
 [5] DelayedArray_0.10.0         BiocParallel_1.18.1
 [7] matrixStats_0.55.0          Biobase_2.44.0
 [9] GenomicRanges_1.36.1        GenomeInfoDb_1.20.0
[11] IRanges_2.18.3              S4Vectors_0.22.1
[13] BiocGenerics_0.30.0         cellassign_0.99.20
[15] Seurat_3.0.2

>loaded via a namespace (and not attached):
  [1] ggbeeswarm_0.6.0         Rtsne_0.15               colorspace_1.4-1
  [4] ggridges_0.5.2           dynamicTreeCut_1.63-1    XVector_0.24.0
  [7] base64enc_0.1-3          BiocNeighbors_1.2.0      listenv_0.8.0
 [10] npsurv_0.4-0             ggrepel_0.8.1            codetools_0.2-16
 [13] splines_3.6.2            R.methodsS3_1.7.1        lsei_1.2-0
 [16] scater_1.12.2            jsonlite_1.6.1           ica_1.0-2
 [19] cluster_2.1.0            png_0.1-7                R.oo_1.23.0
 [22] tfruns_1.4               sctransform_0.2.1        compiler_3.6.2
 [25] httr_1.4.1               dqrng_0.2.1              assertthat_0.2.1
 [28] Matrix_1.2-18            lazyeval_0.2.2           limma_3.40.6
 [31] BiocSingular_1.0.0       htmltools_0.4.0          tools_3.6.2
 [34] rsvd_1.0.2               igraph_1.2.4.2           gtable_0.3.0
 [37] glue_1.3.1               GenomeInfoDbData_1.2.1   RANN_2.6.1
 [40] reshape2_1.4.3           dplyr_0.8.4              rappdirs_0.3.1
 [43] Rcpp_1.0.3               vctrs_0.2.2              gdata_2.18.0
 [46] ape_5.3                  nlme_3.1-144             DelayedMatrixStats_1.6.1
 [49] gbRd_0.4-11              lmtest_0.9-37            stringr_1.4.0
 [52] globals_0.12.5           lifecycle_0.1.0          irlba_2.3.3
 [55] gtools_3.8.1             statmod_1.4.33           future_1.16.0
 [58] edgeR_3.26.8             MASS_7.3-51.5            zlibbioc_1.30.0
 [61] zoo_1.8-7                scales_1.1.0             RColorBrewer_1.1-2
 [64] reticulate_1.14          pbapply_1.4-2            gridExtra_2.3
 [67] ggplot2_3.2.1            stringi_1.4.5            tensorflow_2.0.0
 [70] caTools_1.18.0           bibtex_0.4.2.2           Rdpack_0.11-1
 [73] SDMTools_1.1-221.2       rlang_0.4.4              pkgconfig_2.0.3
 [76] bitops_1.0-6             lattice_0.20-38          ROCR_1.0-7
 [79] purrr_0.3.3              htmlwidgets_1.5.1        cowplot_1.0.0
 [82] tidyselect_1.0.0         plyr_1.8.5               magrittr_1.5
 [85] R6_2.4.1                 gplots_3.0.1.2           pillar_1.4.3
 [88] whisker_0.4              fitdistrplus_1.0-14      survival_3.1-8
 [91] RCurl_1.98-1.1           tibble_2.1.3             future.apply_1.4.0
 [94] tsne_0.1-3               crayon_1.3.4             KernSmooth_2.23-16
 [97] plotly_4.9.1             viridis_0.5.1            locfit_1.5-9.1
[100] grid_3.6.2               data.table_1.12.8        metap_1.1
[103] digest_0.6.24            tidyr_1.0.2              R.utils_2.9.2
[106] munsell_0.5.0            beeswarm_0.2.3           viridisLite_0.3.0
[109] vipor_0.4.5
```
