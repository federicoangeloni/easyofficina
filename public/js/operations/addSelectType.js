$("#add_sp_job").on("click", function () {
    window.location.href = '/operations/listServices/'+data.jobid; //relative to domain

})

$("#add_serv_job").on("click", function () {
    window.location.href = '/operations/SparePartIndex/'+data.jobid; //relative to domain

})