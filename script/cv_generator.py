import cloudconvert
api = cloudconvert.Api('Gl8E7VcMVapvaMu5X5MaBjdRIhhswuwl4YsBOrDslcHCTfrV2S2BO15D7wx1fq0B')
     
process = api.convert({
    "inputformat": "html",
    "outputformat": "pdf",
    "input": "upload",
    "file": open('acceuil.html', 'rb')
})
process.wait()
process.download()
