from geopy.geocoders import Nominatim as gps

geolocator = gps(user_agent="ETH-Inmubeles")
location = geolocator.reverse("19.48191350022486,-99.05806683667677")
print(location.address)
