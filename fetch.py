from scihub import SciHub

sh = SciHub()

# fetch specific article (don't download to disk)
# this will return a dictionary in the form 
# {'pdf': PDF_DATA,
#  'url': SOURCE_URL,
#  'name': UNIQUE_GENERATED NAME
# }
result = sh.fetch('http://ieeexplore.ieee.org/document/1000004/')
