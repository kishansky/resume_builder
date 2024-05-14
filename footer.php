    <div style="height: auto;margin-left:auto;" id="footer">
        <div class="row placeholder-wave mt-2 m-1 ">
            <div class="col-12">
                <div class="row m-1 ">
                    <div style="height: 30px;" class="col-12 placeholder">
        
                    </div>
                    <div style="height: 18px;" class="my-1 offset-3 col-6 placeholder">
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    <script src="./js/jquery.js"></script>
    <script>
        setTimeout(() => {
            $.ajax({
                url: "load/load-footer.php",
                type: "POST",
                success: function (data) {
                    $("#footer").html(data);
                }
            });
        }, 2500);
    </script>
</body>
</html>