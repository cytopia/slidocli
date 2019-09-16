output "public_ip" {
  description = "Public IP address of EC2 instance containing slidocli web interface"
  value       = aws_instance.web.public_ip
}

output "slidocli_web_uri" {
  description = "Slidocli web interface uri"
  value       = "http://${aws_instance.web.public_ip}:${var.slidocli_port}"
}
