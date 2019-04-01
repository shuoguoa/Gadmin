<template>
    <div>
        <div class="crumbs">
            <el-breadcrumb separator="/">
                <el-breadcrumb-item><i class="el-icon-setting"></i> 简介</el-breadcrumb-item>
            </el-breadcrumb>
        </div>
        <div class="ms-doc">
            <h3>README.md</h3>
            <article>
                <h1>manage-system</h1>

                <h2>功能</h2>
                <el-checkbox disabled checked>Element UI</el-checkbox>
                <br>
                <el-checkbox disabled checked>登录/注销</el-checkbox>
                <br>
                <el-checkbox disabled checked>图片拖拽/裁剪上传</el-checkbox>
                <br>
                <el-checkbox disabled checked>修改密码</el-checkbox>
                <br>
                <el-checkbox disabled checked>修改用户信息</el-checkbox>
                <br>
                <h2>安装步骤</h2>
                <p>cd vue-manage-system //进入项目目录</p>
                <p>npm install //安装项目依赖，等待安装完成</p>
                <h2>本地开发</h2>
                <p>//开启前端服务，浏览器访问 http://localhost:8086</p>
                <p>npm run dev</p>
                <p>//开启后端服务</p>
                <p>cd service</p>
                <p>node app</p>
                <h2>设置代理与跨域</h2>
                <p>vue-cli的config文件中有一个proxyTable参数，用来设置地址映射表，可以添加到开发时配置（dev）中</p>
                <p>dev: {
                    // ...
                    proxyTable: {
                        '/api': {
                            target: 'http://127.0.0.1:5003/admin/',
                            changeOrigin: true,
                            pathRewrite: {
                                '^/api': ''
                            }
                        }
                    },
                    // ...
                }</p>

            </article>
        </div>

    </div>
</template>

<script>
    export default {
        data: function(){
            return {}
        }
    }
</script>

<style scoped>
    .ms-doc{
        width:100%;
        max-width: 980px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;
    }
    .ms-doc h3{
        padding: 9px 10px 10px;
        margin: 0;
        font-size: 14px;
        line-height: 17px;
        background-color: #f5f5f5;
        border: 1px solid #d8d8d8;
        border-bottom: 0;
        border-radius: 3px 3px 0 0;
    }
    .ms-doc article{
        padding: 45px;
        word-wrap: break-word;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    .ms-doc article h1{
        font-size:32px;
        padding-bottom: 10px;
        margin-bottom: 15px;
        border-bottom: 1px solid #ddd;
    }
    .ms-doc article h2 {
        margin: 24px 0 16px;
        font-weight: 600;
        line-height: 1.25;
        padding-bottom: 7px;
        font-size: 24px;
        border-bottom: 1px solid #eee;
    }
    .ms-doc article p{
        margin-bottom: 15px;
        line-height: 1.5;
    }
    .ms-doc article .el-checkbox{
        margin-bottom: 5px;
    }
</style>
