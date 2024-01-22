
# Web Server with Epoll


This is a versatile C++ web server employing the epoll mechanism for efficient event-driven communication. It is specifically designed to handle multiple servers concurrently, making it suitable for scenarios where parallel processing of requests across different ports is required.

## Features

- Multiple Servers: The server can concurrently handle multiple servers, each bound to a distinct port.

- Efficient I/O Handling: Utilizes epoll for efficient event-driven I/O handling, allowing the server to scale well with a large number of connections.

- HTTP Support: Supports basic HTTP functionality, including handling GET and POST requests.

- POST Requests: The server is equipped to handle HTTP POST requests, enabling the submission of data from clients to the server.
## Configuration

The server is configured using a custom configuration file. The default configuration file is named server.conf. Here is an example configuration file:

```txt
server {
	server_name 42.fr
	listen 127.0.0.1:8080
	index index.html
	root var/www/
	allowed_methods GET|POST
	filepath_post var/downloads/
	location /rayan {
		allowed_methods GET
		max_body_size 8888
		index rayan.html	
		root var/www/rayan/
	}
	location /kekra {
		redirect https://youtu.be/b2KndsrFHp8?si=wBPTSes1IJyilN-R&t=118
	}
}

server {
	server_name rock.com;
	listen 127.0.0.1:8081
	index index.html
	root var/www/rock_website/
	allowed_methods GET|POST
	filepath_post var/downloads/
}

# ... (Other server configurations)

```
## Configuration Options

- server_name: The domain name associated with the server.

- listen: The IP address and port the server should listen on.

- index: The default file to serve when a directory is requested.

- root: The root directory for serving files.

- allowed_methods: The allowed HTTP methods, separated by | (pipe). E.g., GET|POST.

- filepath_post: The directory where uploaded files via POST requests are stored.

- location: Configuration specific to a URL location.

- allowed_methods: Allowed methods for this location.

- max_body_size: Maximum allowed size (in bytes) for the request body in this location.

- index: Default file to serve for this location.

- root: Root directory specific to this location.

- redirect: URL to redirect to (only for location directives).

- error_page: The file to serve as an error page (e.g., 404.html).
## Usage

```bash
git clone
cd webserv
make
./webserv config/config.cfg 
```

- Access the Server:
Open your web browser and navigate to http://localhost:port, where port is the port number of the server you want to access.
## Contributors


- [Rayan](https://github.com/rayankb92)
- [Mouslim](https://github.com/mousliiim)
- [Jean-Marc](https://github.com/nxoo971)