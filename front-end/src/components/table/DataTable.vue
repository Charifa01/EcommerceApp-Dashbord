<script setup >
import Toolbar from '../layout /Toolbar.vue';

import { ref } from 'vue'



</script>
<template>
    <div>
        <Toolbar />
        <div>
            <el-table
                ref="multipleTableRef"
                :data="tableData"
                style="width: 90%"
                @selection-change="handleSelectionChange"
            >
                <el-table-column type="selection" :selectable="selectable" width="55" />
                <el-table-column label="Date" width="120">
                <template #default="scope">{{ scope.row.date }}</template>
                </el-table-column>
                <el-table-column property="name" label="Name" width="120" />
                <el-table-column property="address" label="Address" />
                <el-table-column label="Operations">
                <template #default="scope">
                    <el-button size="small" @click="handleEdit(scope.$index, scope.row)">
                    Edit
                    </el-button>
                    <el-button
                    size="small"
                    type="danger"
                    @click="handleDelete(scope.$index, scope.row)"
                    >
                    Delete
                    </el-button>
                </template>
                </el-table-column>
            </el-table>
        </div>
    </div>
</template>