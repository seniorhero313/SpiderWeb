
<style type="text/css">



.photo_post{
    width: 100%;
    display: inline-block;
    margin-top: -40px;
}

.photo_post label, .photo_post input {
  color: #333;
  font: 14px/20px Arial;
}

.photo_post label {
  display: inline-block;
  width: 5em;
  padding: 0 1em;
  text-align: right;
}

/* Hide the file input using
opacity */
[type=file] {
    position: absolute;
    filter: alpha(opacity=0);
    opacity: 0;
}
.photo_post input,
.photo_post [type=file] + label {
  border: 1px solid #CCC;
  border-radius: 3px;
  text-align: left;
  padding: 10px;
  width: 100%;
  position: relative;
}
.photo_post [type=file] + label {
  text-align: center;
  /* Decorative */
  background: #333;
  color: #fff;
  border: none;
  cursor: pointer;
}
.photo_post [type=file] + label:hover {
  background: #3399ff;
}
.photo_review{
    display: absolute;

}

</style>  